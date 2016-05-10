<?php

//include_once('class/class_annonces_manager.php'); ==> penser à enlever le commentaire //
class UserManager {

    public function get($id) {
        $oData = mysql_query('SELECT * FROM LeBonCoin.users WHERE id=' . $id . ';');
        $aLine = mysql_fetch_array($oData);
        if ($aLine) {
            $oUser = new User($aLine);
            return $oUser;
        }
    }

    public function getByEmailAndPassword($email, $password) {
        $oData = mysql_query('SELECT * FROM LeBonCoin.users '
                . ' WHERE '
                . 'email = "' . $email . '"'
                . ' AND '
                . 'password = "' . $password . '"');
        $aLine = mysql_fetch_array($oData);
        if ($aLine) {
            $oUser = new User($aLine);
            return $oUser;
        }
    }

}

?>
