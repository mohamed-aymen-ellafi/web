<?PHP
include "../../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["refproduit"]))
{
	$produitC->supprimerproduit($_POST["refproduit"]);
	header('Location: afficherP.php');
}

?>