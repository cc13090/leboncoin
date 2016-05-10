<?php

class annonce {

    private $iId;
    private $sTitle;
    private $sDescription;
    private $sImage;
    private $iPrice;
    private $oDate;
    //on initialise un compteur d'annonces qui est dans le référentiel et non pas dans chacune des instances :
    public static $NB_ANNONCES = 0;

    public function __construct() {
        Annonce::$NB_ANNONCES++;
        $this->iId = Annonce::$NB_ANNONCES;
    }

    public static function load() { //Méthode static = appliquée au référentiel Annonce indépendant des instances, on aurait pu la mettre ailleurs que dans la déclaration de classe
        $aList = array();

        $tab = glob('data/annonce*');

        foreach ($tab as $file) {
            $oAnnonce = unserialize(file_get_contents($file));
            $aList[] = $oAnnonce;
        }
        Annonce::$NB_ANNONCES = count($aList); //nbre d'annonces = nbre d'éléments du tableau
        sort($aList); //Trie le tableau aList pour afficher les annonces dans l'ordre
        return $aList;
    }

    public static function getById($iId) {
        $file = 'data/annonce' . $iId . '.txt';
        $oDetailAnnonce = unserialize(file_get_contents($file));
        return $oDetailAnnonce;
    }

    public function getId() {
        return $this->iId;
    }

    public function getTitle() {
        return $this->sTitle;
    }

    public function getDescription() {
        return $this->sDescription;
    }

    public function getImage() {
        return $this->sImage;
    }

    public function getPrice() {
        return $this->iPrice;
    }

    public function getDate() {
        return $this->oDate;
    }

    /* public function setId($iNewId){
      $this -> iId=$iNewId;
      } */

    public function setTitle($sNewTitle) {
        $this->sTitle = $sNewTitle;
    }

    public function setDescription($sNewDescription) {
        $this->sDescription = $sNewDescription;
    }

    public function setImage($sNewImage) {
        $this->sImage = $sNewImage;
    }

    public function setPrice($iNewPrice) {
        $this->iPrice = $iNewPrice;
    }

    public function setDate($oNewDate) {
        $this->oDate = $oNewDate;
    }

    public function save() {
        $fileName = 'data/annonce' . Annonce::$NB_ANNONCES . '.txt'; // pour mettre des 0 après annonce = .str_pad($this->gtId(),3'0',STR_PAD_LEFT).
        file_put_contents($fileName, serialize($this));
    }

}

?>