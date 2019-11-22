<?PHP
include "../entities/promotion.php";
include "../core/promotionP.php";

if (isset($_POST['reference']) and isset($_POST['id_produit']) and isset($_POST['dateDebut']) and isset($_POST['dateFin'])){
$promotion1=new promotion($_POST['reference'],$_POST['id_produit'],$_POST['dateDebut'],$_POST['dateFin']);
$promotion1P=new promotionP();
$promotion1P->ajouterpromotion($promotion1);
header('Location: afficherpromotion.php');
	
}else{
	echo "vérifier les champs";
}

?>