<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/promotion.php";
include "../core/promotionP.php";
if (isset($_GET['reference'])){
	$promotionP=new promotionP();
    $result=$promotionP->recupererpromotion($_GET['reference']);
	foreach($result as $row){
		$reference=$row['reference'];
		$id_produit=$row['id_produit'];
		$dateDebut=$row['dateDebut'];
		$dateFin=$row['dateFin'];
?>
<form method="POST">
<table>
<caption>Modifier promotion</caption>
<tr>
<td>refrecence</td>
<td><input type="number" name="ref" value="<?PHP echo $refrecence ?>"></td>
</tr>
<tr>
<td>id produit</td>
<td><input type="number" name="id" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>
<td>date de debut </td>
<td><input type="date" name="date1" value="<?PHP echo $dateDebut ?>"></td>
</tr>
<tr>
<td>date de fin </td>
<td><input type="date" name="date2" value="<?PHP echo $dateFin ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$promotion=new promotion($_POST['reference'],$_POST['id_produit'],$_POST['dateDebut'],$_POST['dateFin']);
	$promotionP->modifierpromotion($promotion,$_POST['ref_ini']);
	echo $_POST['ref_ini'];
	header('Location: afficherpromotion.php');
}
?>
</body>
</HTMl>