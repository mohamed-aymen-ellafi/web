<?php
class categorie
{
	private $ref;
	private $nomcategorie;
	public function __construct($ref,$nomcategorie)
	{
		$this->ref=$ref;
		$this->nomcategorie=$nomcategorie;
	
	}
	public function getref(){return $this->ref;}
	public function getnomcategorie(){return $this->nomcategorie;}
	public function setref(){return $this->ref;}
	public function setnomcategorie(){return $this->nomcategorie;}
}
?>