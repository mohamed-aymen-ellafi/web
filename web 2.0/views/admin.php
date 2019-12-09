<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="2.css">



</head>

<body>
<form method="GET" action="">
 <select name="tri" >
<option>id</option>
<option>nom</option>
<option>city</option>
</select>
<select name="tri2" >
<option>croissant</option>
<option>decroissant</option>
</select>


<input type="submit" value=ok>

 </form>

 <form action="" method="GET">
<input type="number" name="page" placeholder="page">
<input type="submit">
</form> 
<?PHP
     include "../core/core.php";

 if (isset($_GET['tri']) AND $_GET['tri']=="id" AND isset($_GET['tri2']) AND $_GET['tri2']=="decroissant")

{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminsiddec();
}
else if (isset($_GET['tri']) AND $_GET['tri']=="nom" AND isset($_GET['tri2']) AND $_GET['tri2']=="croissant")
{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminsnomcr();
     
}
else  if (isset($_GET['tri']) AND $_GET['tri']=="nom" AND isset($_GET['tri2']) AND $_GET['tri2']=="decroissant")

{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminsnomdec();
}
else if (isset($_GET['tri']) AND $_GET['tri']=="city" AND isset($_GET['tri2']) AND $_GET['tri2']=="croissant")
{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminscitycr();
     
}
else  if (isset($_GET['tri']) AND $_GET['tri']=="city" AND isset($_GET['tri2']) AND $_GET['tri2']=="decroissant")

{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminscitydec();
}     
else
{
     $admin1C=new adminC();
     $listeadmin=$admin1C->afficheradminsidcr();
     
}

     ?>

<?php


     ?>
 
<br>

<form method="GET" action="">
<input type="text" name="nom" placeholder="recherche">
<input type="submit" name="aff" value=afficher>



</form>
     <?PHP
    
          if (isset($_GET['aff']))
{
     if (isset($_GET['nom']))
     {
      $r=recherche();      
     ?>
     <br>
     <table border="1">
     <tr>
<td>id</td>
<td>nom</td>
<td>prenom</td>
<td>adresse</td>
<td>mail</td>
<td>number</td>
<td>postal code</td>
<td>city</td>


</tr>




     <?php
     while( $rs = $r->fetch())
     {

?>
<tr>
<td><?PHP echo $rs['id'];?></td>
<td><?PHP echo $rs['nom'];?></td>
<td><?PHP echo $rs['prenom'];?></td>
<td><?PHP echo $rs['adresse'];?></td>
<td><?PHP echo $rs['mail'];?></td>
<td><?PHP echo $rs['num'];?></td>
<td><?PHP echo $rs['cp'];?></td>
<td><?PHP echo $rs['city'];?></td>


</tr>
<?PHP
     }
    }
}
     ?>
     
     </table>
     <br>
     <form method="GET" action="">
 <input type="text" name="id" placeholder="taper i'id" >
 <input type="submit" name="supp" value=supprimer>
 </form>
 
     <?PHP
     if (isset($_GET['supp']))
     {
          $meC=new meC();
          $adminC=new adminC();

if (isset($_GET["id"]))
{
     $meC->supprimerme($_GET["id"]);
     $adminC->supprimermead($_GET["id"]);
     

     header('Location: admin.php');

}



     
    }
     ?>
<table border="1" >
<tr>
<td>id</td>
<td>nom</td>
<td>prenom</td>
<td>adresse</td>
<td>mail</td>
<td>number</td>
<td>postal code</td>
<td>city</td>


</tr>

<?php
foreach($listeadmin as $rs)
     {

?>

<tr>
<td><?PHP echo $rs['id'];?></td>
<td><?PHP echo $rs['nom'];?></td>
<td><?PHP echo $rs['prenom'];?></td>
<td><?PHP echo $rs['adresse'];?></td>
<td><?PHP echo $rs['mail'];?></td>
<td><?PHP echo $rs['num'];?></td>
<td><?PHP echo $rs['cp'];?></td>
<td><?PHP echo $rs['city'];?></td>


</tr>

<?PHP
}

?>

</table>
<input type="submit" id="impression" name="impression" onclick="imprimer_page()" value="imprimer la page">
<script type="text/javascript">
function imprimer_page(){
    window.print();
}
</script>
</body>
</html>