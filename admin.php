
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="2.css">



</head>
<body>

 <?php
 $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
 $r = $a->query("SELECT * FROM `admin`  ORDER BY id  ");
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


</tr>

<?PHP
}

?>

</table>
<br>

<form method="GET" action="">
<input type="text" name="id" placeholder="taper l'id">
<input type="submit" value=afficher>



</form>
     <?PHP
     if (isset($_GET['id']))
     {
         $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
     $r = $a->prepare("SELECT * FROM `admin` WHERE id = ?");
     $r->execute(array($_GET['id']));

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


</tr>
<?PHP
     }
    }
     
     ?>
     
     </table>
     <br>
     <form method="GET" action="">
 <input type="text" name="id" placeholder="taper i'id" >
 <input type="submit" value=supprimer>
 </form>
     <?PHP
     if (isset($_GET['id']))
     {
         $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
     $r = $a->prepare("DELETE FROM `admin` WHERE id = ?");
     $r2 = $a->prepare("DELETE FROM `me` WHERE id = ?");
     $r->execute(array($_GET['id']));
     $r2->execute(array($_GET['id']));

     }
     ?>
    <a href="aj.php">aaa</a>

</body>
</html>