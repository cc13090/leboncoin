<?php
//include_once('class/class_annonce_BIS.php'); ==> penser à enlever le commentaire // dans index.php et remplace class_annonce
// 
class Annonce {
	protected $id;
    protected $title;
    protected $description;
    protected $image;
    protected $price;
    protected $date;
		
	public function __construct($aData) {
		if($aData){
				$this -> hydrate($aData);
		}	
    }
	public function hydrate($aData){
		foreach(array_keys(get_class_vars(get_class($this))) as$sKey ){
			if(isset($aData[$sKey])){
				$this -> $sKey = $aData[$sKey];
			}
			
		}
	}
}

?>