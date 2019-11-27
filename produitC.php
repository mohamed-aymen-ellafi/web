<?PHP 
include_once "../../config.php";
class produitC
{  
		
	 function ajouterproduit($produit)
	{   
		    $refproduit=$produit->getrefproduit();
            $nomproduit=$produit->getnomproduit();
            $marque=$produit->getmarque();
            $description=$produit->getdescription();
            $urlimage=$produit->geturlimage();
            $quantite=$produit->getquantite();
            $prixproduit=$produit->getprixproduit();
            $dateajout=$produit->getdateajout();
            $refcategorie=$produit->getrefcategorie();
		$sql="insert into produit (refproduit,nomproduit,marque,description,urlimage,quantite,prixproduit,dateajout,refcategorie) values ('$refproduit','$nomproduit','$marque','$description','$urlimage','$quantite','$prixproduit','$dateajout','$refcategorie')";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->execute();
        }
		catch(Exception $e)
		{
			echo "erreur:" .$e->getMessage();
		}
	}
	function afficherproduits()
	{
		
		$sql="SElECT * FROM produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 function afficherproduit($produit)
	{
       echo "refproduit:".$produit->getrefproduit()."<br>";
       echo "nom:".$produit->getnomproduit()."<br>";
       echo "marque".$produit->getmarque()."<br>";
       echo "description:".$produit->getdescription()."<br>";
       echo "urlimage:".$produit->geturlimage()."<br>";
       echo "quantité:".$produit->getquantite()."<br>";
       echo "prixproduit:".$produit->getprixproduit()."<br>";
       echo "dateajout:".$produit->getdateajout()."<br>";
        echo "refcategorie:".$produit->getrefcategorie()."<br>";
	}


		function modifierproduit($produit,$refproduit)
	{
		$sql="UPDATE produit SET refproduit=:refproduits, nomproduit=:nomproduit,marque=:marque,description=:description,urlimage=:urlimage,quantite=:quantite,prixproduit=:prixproduit,dateajout=:dateajout,refcategorie=:refcategorie WHERE refproduit=:refproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
           $refproduits=$produit->getrefproduit();
            $nomproduit=$produit->getnomproduit();
            $marque=$produit->getmarque();
            $description=$produit->getdescription();
            $urlimage=$produit->geturlimage();
            $quantite=$produit->getquantite();
            $prixproduit=$produit->getprixproduit();
            $dateajout=$produit->getdateajout();
            $refcategorie=$produit->getrefcategorie();
		$datas=array(':refproduits'=>$refproduits,':refproduit'=>$refproduit, ':nomproduit'=>$nomproduit,':marque'=>$marque, ':description'=>$description,':urlimage'=>$urlimage,':quantite'=>$quantite,':prixproduit'=>$prixproduit,':dateajout'=>$dateajout,':refcategorie'=>$refcategorie);
		$req->bindValue(':refproduits',$refproduits);
		$req->bindValue(':refproduit',$refproduit);
        $req->bindValue(':nomproduit',$nomproduit);
        $req->bindValue(':marque',$marque);
		$req->binValue(':description',$description);
		$req->binValue(':urlimage',$urlimage);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prixproduit',$prixproduit);
		$req->bindValue(':dateajout',$dateajout);
		$req->bindValue(':refcategorie',$refcategorie);

		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
	    return $result;
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	 function supprimerproduit($refproduit)
	{
		$db = config::getConnexion();
		$sql="DELETE FROM produit WHERE refproduit=:refproduit";
		$req = $db->prepare($sql);
		$req->bindValue(':refproduit',$refproduit);
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	function reccupererproduit($refproduit)
	{
		$sql="SELECT * From produit where refproduit=$refproduit";
		$db=config::getConnexion();
		try
		{   
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>