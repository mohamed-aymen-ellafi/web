<?PHP
class promotion{
	private $reference;
	private $id_produit;
	private $dateDebut; 
	private $dateFin;
	function __construct($reference,$id_produit,$dateDebut,$dateFin){
		$this->reference=$reference;
		$this->id_produit=$id_produit;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
	}
	
	function getreference(){
		return $this->reference;
	}
	function getid_produit(){
		return $this->id_produit;
	} 
	function getdateDebut(){
		return $this->sdateDebut;
	}
	function getdateFin(){
		return $this->dateFin;
	}

	function setreference($reference){
		$this->reference=$reference;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	} 
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
		
	} 
}

?>