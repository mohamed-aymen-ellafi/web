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
$a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
if (isset($_GET['username']) AND isset($_GET['mdp']))
{
$r = $a->prepare("SELECT * FROM me WHERE username = ? AND mdp = ? ");
$r->execute(array($_GET['username'],$_GET['mdp']));
 while( $rs = $r->fetch())
 {
 if (!empty($_GET['username']) AND !empty($_GET['mdp']))
  {
   if(  $rs['username']==$_GET['username'] AND $rs['mdp']==$_GET['mdp'])
    {
        header('Location: test.php');
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

