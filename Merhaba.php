<?php 

class MerhabaSinif{

	protected $mesaj;

	public function getMesaj(){
		return $this->mesaj;
	}

	public function setMesaj($mesaj){
		$this->mesaj = $mesaj;
	}

	public function konus(){
		return $this->mesaj;
	}
}

?>