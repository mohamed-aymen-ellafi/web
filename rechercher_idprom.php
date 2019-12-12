<form method="POST" action="rechercher_idprom.php">
<table>
<caption>Rechercher un Promotion</caption>
<tr>
<td>idprom</td>
<td><input type="texte" name="nomP"></td>
</tr>
<td><input type="submit" name="rechercher" value="rechercher" ></td>

</table>
</form>

<table border="3">
<tr>
<td>idprom</td>
<td>idProduit</td>
<td>pourcentage</td>
<td>dateD</td>
<td>dateF</td>
<td>prix_reduc</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
                    <?PHP
                    include "../Core/promotionC.php";
                    $promotion1C=new promotionC();
                    $listepromotion=$promotion1C-> rechercherListePromos($_POST['nomP']);
                    ?>
  <?PHP
foreach($listepromotion as $row){
	?>
	<tr>
	<td><?PHP echo $row['idprom']; ?></td>
	<td><?PHP echo $row['idProduit']; ?></td>
	<td><?PHP echo $row['pourcentage']; ?></td>
	<td><?PHP echo $row['dateD']; ?></td>
	<td><?PHP echo $row['dateF']; ?></td>
	<td><?PHP echo $row['prix_reduc']; ?></td>
	<td>
	<form method="POST" action="supprimerpromo.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idprom']; ?>" name="idprom">
	</form>
	</td>
	<td><a href="modifier.php?idprom=<?PHP echo $row['idprom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
                </table>
            


                                