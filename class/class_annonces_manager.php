<?php

//include_once('class/class_annonces_manager.php'); ==> penser à enlever le commentaire //
class AnnoncesManager {

    // Affichage de toutes les annonces =
    public function getList() {
        $oData = mysql_query('SELECT * FROM LeBonCoin.annonces;');
        //echo 'avant le WHILE de mysql_fetch_array';
        while ($aLine = mysql_fetch_array($oData)) {
            //echo 'dans le WHILE de mysql_fetch_array';
            //echo $aLine[1];
            $oAnnonce = new Annonce($aLine);
            $aList[] = $oAnnonce;
        }
        return $aList;
    }

    // Affichage le detail de l'annonce =
    public function get($id) {
        $oData = mysql_query('SELECT * FROM LeBonCoin.annonces WHERE id=' . $id . ';');
        $aLine = mysql_fetch_array($oData);
        $oAnnonce = new Annonce($aLine);
        return $oAnnonce;
    }

    // Efface une annonce =
    public function delete($id) {
        $oData = mysql_query('DELETE FROM LeBonCoin.annonces WHERE annonces.id=' . $id . ';');
        print_r(mysql_error());
    }

    // Ajouter une annonce =
    public function insert(Annonce &$oAnnonce) {   //objet de type Annonce, avec le & passage par référence
        // & = a tester en PHP5, surement pas besoin
        $title = mysql_escape_string($oAnnonce->getTitle());
        $description = mysql_escape_string($oAnnonce->getDescription());
        $picture = mysql_escape_string($oAnnonce->getPicture());
        $price = mysql_escape_string($oAnnonce->getPrice());
        //$created_date = mysql_escape_string($oAnnonce->getDate());
        //echo ' - dans INSERT, le titre : ' . $title;
        $sql = ' INSERT INTO LeBonCoin.annonces ' .
                ' (title, description, picture, price) ' .
                ' VALUES ('
                . '"' . $title . '","' . $description . '","' . $picture . '","' . $price . '")';
        $result = mysql_query($sql);
        print_r(mysql_error());
        $oAnnonce->setId(mysql_insert_id()); //grace au &, cette opération sera enregistrée dans $oAnnonce
    }

    public function update(Annonce &$oAnnonce) {
        $picture = mysql_escape_string($oAnnonce->getPicture());
        //echo ' - dans update, on insére image :' . $picture;
        $sql = ' UPDATE LeBonCoin.annonces '
                . ' SET picture = "' . $picture . '"'
                . ' WHERE id = "' . $oAnnonce->getId() . '"';
        $result = mysql_query($sql);
        //$oAnnonce->setId(mysql_insert_id());
    }

}

?>