<?PHP 
include "../../entities/categorie.php";
include "../../core/categorieC.php";
if (isset($_POST['ref']) and isset($_POST['nomcategorie']))
{
	$categorie1=new categorie($_POST['ref'],$_POST['nomcategorie']);
	$categorie1C=new categorieC();
	$categorie1C->ajoutercategorie($categorie1);
	header('Location: afficherPr.php');
}

else
{
	echo "vérifier les champs";
}
?>