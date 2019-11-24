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
<p>Username</p>
<input type="text" name="username" id="username" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="mdp" id="mdp" placeholder="Enter password" required>
<input type="submit">
<a href="lyp.php">lost your password ?</a> <br>
<a href="aj">don't have an account ?</a> <br>
</form>
    </div>
</body>
<?php
     include "core.php";

if (isset($_GET['username']) AND isset($_GET['mdp']))
{
    $r=recherche_compte();


    while( $rs = $r->fetch())
 {
 if (!empty($_GET['username']) AND !empty($_GET['mdp']))
  {
   if(  $rs['username']==$_GET['username'] AND $rs['mdp']==$_GET['mdp'])
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
 
}

?>
</html>

