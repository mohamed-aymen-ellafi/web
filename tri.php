<div id="promotion">
 
 
   <?php    try  
            {
	 /*$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	  $bdd = new PDO('mysql:host=mysql51-31.perso;dbname=villacam408', 'villacam408', 'jolie408', $pdo_options);
		      }*/
			catch (Exception $e)
				{
     	   die('Erreur : ' . $e->getMessage());
				}
     ?>
<?php  
if(isset($_GET['tri']) && !empty($_GET['tri'])){
 $val = $_GET['tri'];
 $AllMembers = $bdd->query("SELECT * FROM PROMOTION ORDER BY '$val'"); // charge tous les films   
   }else{
$AllMembers = $bdd->query("SELECT * FROM promotion");
 }     
      while($member = $AllMembers->fetch())    // charge les films 1 par 1 (boucle while)
         {  ?>
      <tr> <table>
    <td><?PHP echo $row['reference']; ?> </td>
    <td><?PHP echo $row['id_produit']; ?> </td>
    <td><?PHP echo $row['dateDebut']; ?> </td>
    <td><?PHP echo $row['dateFin']; ?> </td>
    <td><?PHP echo $row['pourcentage']; ?> </td> </tr> 

    </table>
 
</div>