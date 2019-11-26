<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
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
<p>city</p>
<input type="text" name="city" placeholder="Enter your city " required>
<p>number</p>
<input type="text" name="num" placeholder="Enter your number " required>
<p>postal code</p>
<input type="text" name="cp" placeholder="Enter your postal code " required>
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
include "../core/core.php";
include "../entities/entities.php";

$a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
$er=0;
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
#verifnumber----------------------------------------------------------------------------------------------
if (isset($_GET['num']) AND !empty($_GET['num']))
{
    $num=$_GET['num'];

if(strlen($num)==8)
{
    #verifCP----------------------------------------------------------------------------------------------
if (isset($_GET['cp']) AND !empty($_GET['cp']))
{
    $cp=$_GET['cp'];

if(strlen($cp)==4)
{
    
     #verifmdp----------------------------------------------------------------------------------------------
 if (isset($_GET['mdp'],$_GET['mdp2']) AND !empty($_GET['mdp']) AND !empty($_GET['mdp2']))
 {
     $pass=$_GET['mdp'];
     $passCNF=$_GET['mdp2'];

 if($passCNF==$pass)
 {   
    if ($er==0 AND isset($_GET['username']) AND isset($_GET['mail'])AND isset($_GET['mdp']) AND !empty($_GET['username']) AND !empty($_GET['mail'])AND !empty($_GET['mdp'])AND !empty($_GET['mdp2'])) 
    {
        $me1=new me($_GET['username'],$_GET['mail'],$_GET['mdp']);
        $me1C=new meC();
        $me1C->ajouterme($me1);
	

    }
     if ($er==0 AND isset($_GET['nom']) AND isset($_GET['prenom'])AND isset($_GET['adresse'])AND isset($_GET['mail']) AND isset($_GET['num'])AND isset($_GET['cp']) AND isset($_GET['city']) AND !empty($_GET['nom']) AND !empty($_GET['prenom'])AND !empty($_GET['adresse'])AND !empty($_GET['mail']) AND !empty($_GET['num'])AND !empty($_GET['cp'])AND !empty($_GET['city'])) 
    {
        $admin1=new admin($_GET['nom'],$_GET['prenom'],$_GET['adresse'],$_GET['mail'],$_GET['num'],$_GET['cp'],$_GET['city']);
        $admin1C=new adminC();
        $admin1C->ajouteradmin($admin1);
	    }



 }
 else 
 {
     
     echo "<script type='text/javascript'>alert('the passwords are not identical');</script>";
 }
 
 }
}
else 
{
    
    echo "<script type='text/javascript'>alert('wrong postal code');</script>";
}

}

     
}
else 
{
    
    echo "<script type='text/javascript'>alert('wrong number');</script>";
}
}
  
 echo $er;
 
?>




</body>
</html>