<?PHP
include "../../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["ref"]))
{
	$categorieC->supprimercategorie($_POST["ref"]);
	header('Location: afficherPr.php');
}

?>