<?PHP 
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_POST['refproduit']) and isset($_POST['nomproduit']) and isset($_POST['marque']) and isset($_POST['description'])and isset($_POST['urlimage']) and isset($_POST['quantite']) and isset($_POST['prixproduit'])  and isset($_POST['dateajout']) and isset($_POST['refcategorie']))
    

{   
	$produit1C=new produitC();
	$produit1=new produit($_POST['refproduit'],$_POST['nomproduit'],$_POST['marque'],$_POST['description'],$_POST['urlimage'],$_POST['quantite'],$_POST['prixproduit'],$_POST['dateajout'],$_POST['refcategorie']);
	
	$produit1C->ajouterproduit($produit1);
	header('Location: afficherP.php');
}

else
{
	echo "vérifier les champs";
}
?>