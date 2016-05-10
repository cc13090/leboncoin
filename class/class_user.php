<?php

//include_once('class/class_annonce_BIS.php'); ==> penser à enlever le commentaire // dans index.php et remplace class_annonce
//
class User {

    protected $id;
    protected $email;
    protected $password;

    public function __construct($aData = array()) {
        if ($aData) {
            $this->hydrate($aData);
        }
    }

    public function hydrate($aData) {
        //Avec la méthode hydrate en 3 lignes :
        /* foreach(array_keys(get_class_vars(get_class($this))) as$sKey ){
          if(isset($aData[$sKey])){
          $this -> $sKey = $aData[$sKey];
          }
         */
        $this->setId($aData['id']);
        $this->setEmail($aData['email']);
        $this->setPassword($aData['password']);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($sNewId) {
        $this->id = $sNewId;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($sEmail) {
        $this->email = $sEmail;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($sPassword) {
        $this->password = $sPassword;
    }

}

?>