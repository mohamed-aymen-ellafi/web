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
<div>
    <img src="avatar.png" >
        <h3>create an account</h3>
<form action="" method="GET">
<p>first name</p>
<input type="text" name="nom" placeholder="Enter first name" required>
<p>last name</p>
<input type="text" name="prenom" placeholder="Enter last name" required>
<p>adress</p>
<input type="text" name="adresse" placeholder="Enter your adress " required>
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" required>
<p>Mail</p>
<input type="email" name="mail"  placeholder="Enter Email" required>
<p>Password</p>
<input type="password" name="mdp" placeholder="Enter password" required>
<p>Password verification</p>
<input type="password" name="mdp2" placeholder="verify password" required>

<input type="submit" name="submit">
<a href="connexion.php">Login</a> <br>
</form>
    </div>

<?php

$a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
$er=0;

/*if (isset($_GET['submit'])){
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $adresse=$_GET['adresse'];
    $mail=$_GET['mail'];
    $mdp=$_GET['mdp'];
    $mdp2=$_GET['mdp2'];

    }*/

#admin----------------------------------------------------------------------------------------------
 if (isset($_GET['nom']) AND isset($_GET['prenom'])AND isset($_GET['adresse']) AND isset($_GET['mail']) AND !empty($_GET['nom']) AND !empty($_GET['prenom'])AND !empty($_GET['adresse'])AND !empty($_GET['mail'])) 
 {
 $r=$a->prepare("INSERT INTO `admin`(`nom`, `prenom`, `adresse`, `mail`) VALUES (?,?,?,?)");
 $r->execute(array($_GET['nom'],$_GET['prenom'],$_GET['mdp'],$_GET['mail']));
 }
 #verifmdp----------------------------------------------------------------------------------------------
 if (isset($_GET['mdp'],$_GET['mdp2']) AND !empty($_GET['mdp']) AND !empty($_GET['mdp2']))
 {
     $pass=$_GET['mdp'];
     $passCNF=$_GET['mdp2'];
 /*$r = $a->prepare("SELECT * FROM me WHERE mdp = ? AND mdp2 = ? ");
 $r->execute(array($_GET['mdp'],$_GET['mdp2']));
 */ 
 if($passCNF==$pass)
 {
     $er=0;
 }
 else 
 {
     $er=1;
     echo "<script type='text/javascript'>alert('the passwords are not identical');</script>";

 }

 
 }
 echo $er;
 #vrifusername----------------------------------------------------------------------------------------------
 if (isset($_GET['username']))
 {
 $r = $a->prepare("SELECT * FROM me WHERE username = ? ");
 $r->execute(array($_GET['username']));

 while( $rs = $r->fetch())
 {
    
 if(!empty($_GET['username']) AND $rs['username']==$_GET['username'])
 {
     $er=1;
 echo "<script type='text/javascript'>alert('this username already existes please change');</script>";
 }

 }
 }
 #verifmail----------------------------------------------------------------------------------------------
 if (isset($_GET['mail']))
 {
 $r = $a->prepare("SELECT * FROM me WHERE mail = ? ");
 $r->execute(array($_GET['mail']));

 while( $rs = $r->fetch())
 {
    
 if(!empty($_GET['mail']) AND $rs['mail']==$_GET['mail'])
 {
     $er=1;
 echo "<script type='text/javascript'>alert('this mail already existes please change');</script>";
 }

 }
 }

 #admin----------------------------------------------------------------------------------------------

 if ($er==0 AND isset($_GET['username']) AND isset($_GET['mail'])AND isset($_GET['mdp']) AND !empty($_GET['username']) AND !empty($_GET['mail'])AND !empty($_GET['mdp'])AND !empty($_GET['mdp2'])) 
 {
 $r=$a->prepare("INSERT INTO me(username,mail,mdp) VALUES (?,?,?)");
 $r->execute(array($_GET['username'],$_GET['mail'],$_GET['mdp']));
 }


?>




</body>
</html>