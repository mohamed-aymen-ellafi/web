<?PHP
class me
{
	private $username;
	private $mail;
	private $ind;
    private $mdp;

	function __construct($username,$mail,$ind,$mdp){
		$this->username=$username;
		$this->mail=$mail;
		$this->ind=$ind;
		$this->mdp=$mdp;

	}
	
	
	function getusername(){
		return $this->username;
	}
	function getmail(){
		return $this->mail;
	}
	function getind(){
		return $this->ind;
	}
	function getmdp(){
		return $this->mdp;
	}
	
	
	function setusername($username){
		$this->username=$username;
	}
	function setmail($mail){
		
		$this->mail=$mail;
	}
	function setind($ind){
		$this->ind=$ind;
	}

	function setmdp($mdp){
		$this->mdp=$mdp;
	}
	
}
class admin
{
	private $nom;
	private $prenom;
    private $adresse;
    private $mail;
	private $num;
    private $cp;
    private $city;



	function __construct($nom,$prenom,$adresse,$mail,$num,$cp,$city){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->mail=$mail;
        $this->num=$num;
        $this->cp=$cp;
		$this->city=$city;


	}
	
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
    }
    function getadresse(){
		return $this->adresse;
	}
	function getmail(){
		return $this->mail;
	}
	function getnum(){
		return $this->num;
	}
	function getcp(){
		return $this->cp;
	}
	function getcity(){
		return $this->city;
	}
    
    
	function setnom($nom){
		$this->nom=$nom;
    }
    function setprenom($prenom){
		$this->prenom=$prenom;
    }
    function setadresse($adresse){
		$this->adresse=$adresse;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setnum($num){
		$this->num=$num;
	}
	function setcp($cp){
		$this->cp=$cp;
	}function setcity($city){
		$this->city=$city;
	}
}

?>