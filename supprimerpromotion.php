<?PHP
include "../core/promotionP.php";
$promotionP=new promotionP();
if (isset($_POST["reference"])){
	$promotionP->supprimerpromotion($_POST["reference"]);
	header('Location: afficherpromotion.php');
}

?>