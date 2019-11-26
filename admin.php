
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
<?PHP
     include "../core/core.php";
 $admin1C=new adminC();
$listeadmin=$admin1C->afficheradmins();

     
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
<?php


     ?>
 
<br>

<form method="GET" action="">
<input type="text" name="id" placeholder="taper l'id">
<input type="submit" name="aff" value=afficher>



</form>
     <?PHP
    
          if (isset($_GET['aff']))
{
     if (isset($_GET['id']))
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
     if (isset($_GET['id']))
     {
          supprimer();
     header('Location: admin.php');


     }
    }
     ?>
    <a href="aj.php">a</a>

</body>
</html>