<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="1.css">

</head>
<body>
<  <?PHP
            $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
   
if (isset($_POST['id']) AND isset($_POST['username'])AND isset($_POST['mail'])AND isset($_POST['mdp']) )

{
$r=$a->prepare("UPDATE `me` SET 
`username`=:username,`mail`=:mail,`mdp`=:mdp
WHERE id=:id");
$r->execute(array(
    'username' => $_POST['username'],
    'mail' => $_POST['mail'],
    'mdp' => $_POST['mdp'],
    'id' => $_POST['id']
));
$r=$a->prepare("UPDATE `admin` SET `mail`=:mail
WHERE id=:id");
$r->execute(array(
    'mail' => $_POST['mail'],
    'id' => $_POST['id']
));
?>
<?php
     }
     $r = $a->query("SELECT * FROM me /*WHERE id > '1' ORDER BY id DESC LIMIT 0,2 */");
     $rs = $r->fetch()

     
?>
<form action="" method="POST">
<table border="1">
     <tr>
         <td>cin</td>
         <td><input type="text" name="id"  value="<?PHP echo $rs['id'] ;?>"></td>
     </tr>
     <tr>
         <td>nom</td>
         <td><input type="text" name="username" placeholder="<?PHP echo $rs['username'] ;?>"></td>
     </tr>
     <tr>
         <td>prenom</td>
         <td><input type="text" name="mail" placeholder="<?PHP echo $rs['mail'] ;?>"></td>
     </tr>
     <tr>
         <td>date</td>
         <td><input type="text" name="mdp" placeholder="<?PHP echo $rs['mdp'] ;?>"></td>
     </tr>
     <tr>
         <td>nbcr</td>
         <td><input type="text" name="mdp" placeholder="<?PHP echo $rs['mdp'] ;?>"></td>
     </tr>
     <tr>
         <td></td>
         <td><input type="submit" value="confirmer la modifier"> <a href="afficher.php">af</a></td>
     </tr>
     </table>
     

</form> <br>
</body>
</html>