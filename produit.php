<?php
class produit
{
	private $refproduit;
	private $nomproduit;
	private $marque;
	private $description;
	private $urlimage;
	private $quantite;
	private $prixproduit;
	private $dateajout;
	private $refcategorie;
	public function __construct($refproduit,$nomproduit,$marque,$description,$urlimage,$quantite,$prixproduit,$dateajout,$refcategorie)
	{
		$this->refproduit=$refproduit;
		$this->nomproduit=$nomproduit;
		$this->marque=$marque;
		$this->description=$description;
		$this->urlimage=$urlimage;
		$this->quantite=$quantite;
		$this->prixproduit=$prixproduit;
		$this->dateajout=$dateajout;
		$this->refcategorie=$refcategorie;
	}
	public function getrefproduit(){return $this->refproduit;}
	public function getnomproduit(){return $this->nomproduit;}
	public function getmarque(){return $this->marque;}
	public function getdescription(){return $this->description;}
	public function geturlimage(){return $this->urlimage;}
	public function getquantite(){return $this->quantite;}
	public function getprixproduit(){return $this->prixproduit;}
	public function getdateajout(){return $this->dateajout;}
	public function getrefcategorie(){return $this->refcategorie;}
	public function setrefproduit(){return $this->refproduit;}
	public function setnomproduit(){return $this->nomproduit;}
	public function setmarque(){return $this->marque;}
	public function setdescription(){return $this->description;}
	public function seturlimage(){return $this->urlimage;}
	public function setquantite(){return $this->quantite;}
	public function setprixproduit(){return $this->prixproduit;}
	public function setdateajout(){return $this->dateajout;}
	public function setrefcategorie(){return $this->refcategorie;}
}
?>