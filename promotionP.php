<?PHP
include "config.php";
function afficherpromotion ($promotion){
		echo "reference: ".$promotion->getreference()."<br>";
		echo "id produit : ".$promotion->id_produit()."<br>";
		echo "date de debut : ".$promotion->getdateDebut()."<br>";
		echo "date de fin : ".$promotion->getdateFin()."<br>";
	}
	function ajouterpromotion($promotion){
		$sql="insert into promotion (reference,id_produit,dateDebut,dateFin) values (:reference, :id_produit,:dateDebut,:dateFin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $reference=$promotion->getreference();
        $id_produit=$promotion->getid_produit();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
		$req->bindValue(':reference',$reference);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromotion($reference){
		$sql="DELETE FROM promotion where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpromotion($promotion,$reference){
		$sql="UPDATE promotion SET reference=:reference, nom=:nom,id_produit=:id_produit,dateDebut=:dateDebut,dateFin=:dateFin WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$reference=$promotion->getreference();
        $id_produit=$promotion->getid_produit();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
		$datas = array(':reference'=>$reference, ':id_produit'=>$id_produit,':dateDebut'=>$dateDebut,':dateFin'=>$dateFin);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromotion($promotion){
		$sql="SELECT * from promotion where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>