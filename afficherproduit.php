<?PHP
include "../../core/produitC.php";
$produit1C=new produitC();
$listeproduit=$produit1C->afficherproduits();

?>

<table border="1">
<tr>
	<td></td>
<td>refproduit</td>
<td>nomproduit</td>
<td>marque</td>
<td>description</td>
<td>quantite</td>
<td>prixproduit</td>
<td>urlimage</td>
<td>dateajout</td>
</tr>

<?PHP
foreach($listeproduit as $row){
	?>
	<tr>
	<td><img src="./img/<?php echo $row['urlimage'];?>"></td>
	<td><?PHP echo $row['refproduit']; ?></td>
	<td><?PHP echo $row['nomproduit']; ?></td>
	<td><?PHP echo $row['marque']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prixproduit']; ?></td>
	<td><?PHP echo $row['urlimage']; ?></td>
	<td><?PHP echo $row['dateajout']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['refproduit'];?>" name="refproduit">
	</form>
	</td>
	<td><a href="modifierproduit.php?refproduit=<?PHP echo $row['refproduit']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>