<?php

class AnnoncesManager {

    private $oDB;

    public function __construct(PDO $oDB) {
        $this->oDB = $oDB;
    }

    public function getList() {
        $sQuery = 'SELECT * FROM LeBonCoin.annonces';
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->execute();

        while ($aLine = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            //echo 'dans le WHILE de mysql_fetch_array';
            //echo $aLine[1];
            $oAnnonce = new Annonce($aLine);
            $aList[] = $oAnnonce;
        }
        return $aList;
    }

    public function get($id) {
        $sQuery = 'SELECT * FROM LeBonCoin.annonces WHERE id=' . $id;
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->execute();

        $aLine = $oStmt->fetch(PDO::FETCH_ASSOC);
        $oAnnonce = new Annonce($aLine);
        return $oAnnonce;
    }

    public function delete($id) {
        $sQuery = 'DELETE FROM LeBonCoin.annonces WHERE annonces.id=' . $id;
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->execute();
        print_r(mysql_error());
    }

    public function insert(Annonce &$oAnnonce) {
        //$title = mysql_escape_string($oAnnonce->getTitle());
        //$description = mysql_escape_string($oAnnonce->getDescription());
        //$picture = mysql_escape_string($oAnnonce->getPicture());
        //$price = mysql_escape_string($oAnnonce->getPrice());

        $oStmt = $this->oDB->prepare("INSERT INTO LeBonCoin.annonces (title, description, picture, price)
                VALUES (:title, :description, :picture, :price)");
        $oStmt->bindValue(':title', $oAnnonce->getTitle());
        $oStmt->bindValue(':description', $oAnnonce->getDescription());
        $oStmt->bindValue(':picture', $oAnnonce->getPicture());
        $oStmt->bindValue(':price', $oAnnonce->getPrice());
        $oStmt->execute();
        $oAnnonce->setId($this->oDB->lastInsertId());
    }

    public function update(Annonce $oAnnonce) {
        $sQuery = 'UPDATE LeBonCoin.annonces SET picture =:picture WHERE id =' . $oAnnonce->getId();
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->bindValue(':picture', $oAnnonce->getPicture(), PDO::PARAM_STR);
        $oStmt->execute();
    }

}

?>