<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
    <link rel="stylesheet" type="text/css" href="1.css">


</head>
<body>
    <div>
    <img src="avatar.png" >
        <h1>Login Here</h1>
<form action="" method="GET">
<p>email</p>
<input type="text" name="mail" id="mail" placeholder="Enter email" required>
<p>Password</p>
<input type="password" name="mdp" id="mdp" placeholder="Enter password" required>
<input type="submit">
<a href="lyp.php">lost your password ?</a> <br>
<a href="aj">don't have an account ?</a> <br>
</form>
    </div>
</body>
<?php
     include "../core/core.php";
     $_SESSION['ps']=0;
if (isset($_GET['mail']) AND isset($_GET['mdp']))
{
    $r=recherche_compte();


    while( $rs = $r->fetch())
 {
 if (!empty($_GET['mail']) AND !empty($_GET['mdp']))
  {
   if(  $rs['mail']==$_GET['mail'] AND $rs['mdp']==$_GET['mdp'])
    {  
        $_SESSION['ps']=$rs['id'];
        $_SESSION['username']=$rs['username'];
        $_SESSION['mail']=$rs['mail'];
        $_SESSION['mdp']=$rs['mdp'];
      header('Location: store.php');
   }
   /*if($rs['mdp']!=$_GET['mdp'])
    {
       echo "<script type='text/javascript'>alert('f');</script>";
    }*/
  }
 }
 
 $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("SELECT * FROM `admin` WHERE mail = ?");
    $r->execute(array($_GET['mail']));
    while( $rs = $r->fetch())
 {

      $_SESSION['adresse']=$rs['adresse'];
      $_SESSION['mail']=$rs['mail'];
      $_SESSION['num']=$rs['adresse'];
      $_SESSION['cp']=$rs['cp'];
      $_SESSION['city']=$rs['city'];

 

 }
}

?>
</html>

