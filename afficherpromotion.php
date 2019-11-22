<?PHP
include "../core/promotionP.php";
$promotion1P=new promotionP();
$listepromotion=$promotion1P->afficherpromotion();
?>
<table border="1">
<tr>
<td>reference</td>
<td>identifiant du produit </td>
<td>date   debut  </td>
<td>date fin </td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepromotion as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><?PHP echo $row['dateDebut']; ?></td>
	<td><?PHP echo $row['dateFin']; ?></td>
	<td><form method="POST" action="supprimerpromotion.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</form>
	</td>
	<td><a href="modifierpromotion.php?reference=<?PHP echo $row['reference']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
