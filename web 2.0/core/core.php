    
   <?php
include "../config.php";

class meC {
    function ajouterme($me){
		$sql="insert into me (username,mail,mdp) values (:username, :maiil,:mdp )";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
		
        $username=$me->getusername();
        $mail=$me->getmail();
        $mdp=$me->getmdp();
		$req->bindValue(':username',$username);
		$req->bindValue(':maiil',$mail);
		$req->bindValue(':mdp',$mdp);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    function supprimerme($id)
	{
		$db = config::getConnexion();
		$sql="DELETE FROM me WHERE id=:id";
		$req = $db->prepare($sql);
		$req->bindValue(':id',$id);
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
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
    function afficheradminsidcr()
	{
        $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}

		$sql="SElECT * FROM admin ORDER BY id LIMIT $dep,$vidparpage ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficheradminsiddec()
	{
        
        $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}




		$sql="SElECT * FROM admin ORDER BY id DESC LIMIT $dep,$vidparpage ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficheradminsnomdec()
	{   $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}

		
		$sql="SElECT * FROM admin ORDER BY nom DESC LIMIT $dep,$vidparpage ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficheradminsnomcr()
	{
        $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}

		$sql="SElECT * FROM admin ORDER BY nom LIMIT $dep,$vidparpage  ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficheradminscitycr()
	{ 
        $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}

		
		$sql="SElECT * FROM admin ORDER BY city LIMIT $dep,$vidparpage  ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficheradminscitydec()
	{
        $db = config::getConnexion();

		$vidparpage = 5;
$vidtotalereq = $db->query("SELECT id FROM admin");
$vidtotale= $vidtotalereq->rowCount();

if(isset($_GET['page']) AND !empty($_GET['page']))
{
    $_GET['page'] = intval($_GET['page']);
    $pagecc = $_GET['page'];
}
else
{
    $pagecc = 1;
}
$dep = ($pagecc-1)*$vidparpage;
$pagetotale=ceil($vidtotale/$vidparpage);
for ($i=1;$i<=$pagetotale;$i++)
{
   echo '<a href="admin.php?page='.$i.'">'.$i.'</a> ';
}

		
		$sql="SElECT * FROM admin ORDER BY city DESC LIMIT $dep,$vidparpage ";
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
     function supprimermead($id)
     {
         $db = config::getConnexion();
         $sql="DELETE FROM admin WHERE id=:id";
         $req = $db->prepare($sql);
         $req->bindValue(':id',$id);
         try
         {
             $req->execute();
            
         }
         catch (Exception $e)
         {
             die('Erreur: '.$e->getMessage());
         }
     }
   
}


function recherche()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("SELECT * FROM `admin` ORDER BY nom");
    if (isset($_GET['nom']) AND !empty($_GET['nom']))
    {
        $qq=$_GET['nom'];
        $r = $a->prepare("SELECT * FROM `admin`  WHERE num LIKE '%$qq%' OR cp LIKE '%$qq%' OR adresse LIKE '%$qq%' OR id LIKE '%$qq%' OR nom LIKE '%$qq%' OR prenom LIKE '%$qq%' OR mail LIKE '%$qq%' OR city LIKE '%$qq%' ORDER BY nom ");


    }


    $r->execute(array($_GET['nom']));
     
   return $r; 
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

    $r = $a->prepare("SELECT * FROM me WHERE mail = ?  AND mdp = ? ");
$r->execute(array($_GET['mail'],$_GET['mdp']));
return $r;

}
function recherche_username()
{ $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r = $a->prepare("SELECT * FROM me WHERE username = ?  ");
$r->execute(array($_GET['username']));
return $r;

}
function recherche_mail()
{ $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r = $a->prepare("SELECT * FROM me WHERE mail = ?  ");
$r->execute(array($_GET['mail']));
return $r;

}



?>