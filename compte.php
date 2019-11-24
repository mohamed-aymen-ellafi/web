<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modification</title>
    <link rel="stylesheet" type="text/css" href="1.css"> 

</head>
<body>
 <?PHP
     include "core.php";

            $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
if (isset($_GET['id']) AND isset($_GET['username'])AND isset($_GET['mail'])AND isset($_GET['mdp']) )

{
    modifier();


?>
<?php
     }
     $r = $a->query("SELECT * FROM me");
    $rs = $r->fetch()

     
?>
<form action="" method="GET">
<table border="1">
         <input type="text" name="id"  value="<?PHP echo $_SESSION['ps'] ;?>" style="display:none">
    
     <tr>
         <td>username</td>
         <td><input type="text" name="username"></td>
     </tr>
     <tr>
         <td>mail</td>
         <td><input type="text" name="mail" ></td>
     </tr>
     <tr>
         <td>mot de passe</td>
         <td><input type="text" name="mdp" ></td>
     </tr>
     <tr>
         <td></td>
         <td><input type="submit" value="confirmer la modifier"></td>
     </tr>
     </table>
     <a href="connexion.php">connexion</a>


</form> <br>
</body>
</html>