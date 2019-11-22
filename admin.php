
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
 $r = $a->query("SELECT * FROM `admin` # ORDER BY nbcrimes DESC ");
?>
<table border="1" >
<tr>
<td>nom</td>
<td>prenom</td>
<td>adresse</td>
<td>mail</td>

</tr>

<?php
while( $rs = $r->fetch())
{

?>

<tr>
<td><?PHP echo $rs['nom'];?></td>
<td><?PHP echo $rs['prenom'];?></td>
<td><?PHP echo $rs['adresse'];?></td>
<td><?PHP echo $rs['mail'];?></td>

</tr>

<?PHP
}

?>

</table>


</body>
</html>