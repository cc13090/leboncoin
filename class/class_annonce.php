<?php

//include_once('class/class_annonce_BIS.php'); ==> penser à enlever le commentaire // dans index.php et remplace class_annonce
//
class Annonce {

    protected $id;
    protected $title;
    protected $description;
    protected $picture;
    protected $price;
    protected $created_date;

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
        $this->setTitle($aData['title']);
        $this->setDescription($aData['description']);
        $this->setPicture($aData['picture']);
        $this->setPrice($aData['price']);
        $this->setCreatedDate($aData['created_date']);
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDate() {
        return $this->created_date;
    }

    public function setId($sNewId) {
        $this->id = $sNewId;
    }

    public function setTitle($sNewTitle) {
        $this->title = $sNewTitle;
    }

    public function setDescription($sNewDescription) {
        $this->description = $sNewDescription;
    }

    public function setPicture($sNewImage) {
        $this->picture = $sNewImage;
    }

    public function setPrice($iNewPrice) {
        $this->price = $iNewPrice;
    }

    public function setCreatedDate($oNewDate) {
        $this->created_date = $oNewDate;
    }

}

?>