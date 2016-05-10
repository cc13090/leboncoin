<?php

//include_once('class/class_annonces_manager.php'); ==> penser à enlever le commentaire //
class UserManager {

    private $oDB;

    public function __construct(PDO $oDB) {
        $this->oDB = $oDB;
    }

    public function get($id) {
        $sQuery = 'SELECT * FROM LeBonCoin.users WHERE id=' . $id;
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->execute();
        $aLine = $oStmt->fetch(PDO::FETCH_ASSOC);
        if ($aLine) {
            $oUser = new User($aLine);
            return $oUser;
        }
    }

    public function getByEmailAndPassword($email, $password) {
        $sQuery = 'SELECT * FROM LeBonCoin.users WHERE
                    email=:email AND password=:password';
        $oStmt = $this->oDB->prepare($sQuery);
        $oStmt->bindValue(':email', $email);
        $oStmt->bindValue(':password', $password);
        $oStmt->execute();
        $aLine = $oStmt->fetch(PDO::FETCH_ASSOC);

        if ($aLine) {
            $oUser = new User($aLine);
            return $oUser;
        }
    }

}

?>
