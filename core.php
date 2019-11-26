<?php
include "../config.php";

class meC {
    function ajouterme($me){
		$sql="insert into me (username,mail,mdp) values (:username, :mail,:mdp )";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
		
        $username=$me->getusername();
        $mail=$me->getmail();
        $mdp=$me->getmdp();
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

}
class adminC {
    function ajouteradmin($admin){
		$sql="insert into admin (nom,prenom,adresse,mail,num,cp,city) values ( :nom,:prenom,:adresse,:mail,:num,:cp,:city)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$admin->getnom();
        $prenom=$admin->getprenom();
        $adresse=$admin->getadresse();
        $mail=$admin->getmail();
        $num=$admin->getnum();
        $cp=$admin->getcp();
        $city=$admin->getcity();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':num',$num);
		$req->bindValue(':cp',$cp);
		$req->bindValue(':city',$city);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    function afficheradmins()
	{
		
		$sql="SElECT * FROM admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 function afficheradmin($admin)
	{
       echo "nom:".$admin->getnom()."<br>";
       echo "prenom:".$admin->getprenom()."<br>";
       echo "adresse".$admin->getadresse()."<br>";
       echo "mail:".$admin->getmail()."<br>";
       echo "num:".$admin->getnum()."<br>";
       echo "cp:".$admin->getcp()."<br>";
       echo "city:".$admin->getcity()."<br>";
     }

}

function recherche()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("SELECT * FROM `admin` WHERE id = ?");
    $r->execute(array($_GET['id']));
     
   return $r;
}
function supprimer()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("DELETE FROM `admin` WHERE id = ?");
    $r2 = $a->prepare("DELETE FROM `me` WHERE id = ?");
    $r->execute(array($_GET['id']));
    $r2->execute(array($_GET['id']));
}
function modifierusername()
{   
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `me` SET 
    `username`=:username
    WHERE id=:id");
    $r->execute(array(
        'username' => $_GET['username'],
        'id' => $_GET['id']
    ));
}
function modifiermail()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `me` SET 
    `mail`=:mail
    WHERE id=:id");
    $r->execute(array(
        'mail' => $_GET['mail'],
        'id' => $_GET['id']
    ));
    $r=$a->prepare("UPDATE `admin` SET `mail`=:mail
WHERE id=:id");
$r->execute(array(
    'mail' => $_GET['mail'],
    'id' => $_GET['id']
));
}
function modifiermdp()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `me` SET 
    `mdp`=:mdp
    WHERE id=:id");
    $r->execute(array(
        'mdp' => $_GET['mdp'],
        'id' => $_GET['id']
    ));
}
function modifieradresse()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `admin` SET 
    `adresse`=:adresse
    WHERE id=:id");
    $r->execute(array(
        'adresse' => $_GET['adresse'],
        'id' => $_GET['id']
    ));
}
function modifiernum()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `admin` SET 
    `num`=:num
    WHERE id=:id");
    $r->execute(array(
        'num' => $_GET['num'],
        'id' => $_GET['id']
    ));
}
function modifiercp()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `admin` SET 
    `cp`=:cp
    WHERE id=:id");
    $r->execute(array(
        'cp' => $_GET['cp'],
        'id' => $_GET['id']
    ));
}
function modifiercity()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r=$a->prepare("UPDATE `admin` SET 
    `city`=:city
    WHERE id=:id");
    $r->execute(array(
        'city' => $_GET['city'],
        'id' => $_GET['id']
    ));
}




function recherche_compte()
{ $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r = $a->prepare("SELECT * FROM me WHERE username = ?  AND mdp = ? ");
$r->execute(array($_GET['username'],$_GET['mdp']));
return $r;

}



?>