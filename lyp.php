<?php
session_start();

?>
    <link rel="stylesheet" type="text/css" href="4.css">
<h1>type your indice</h1>
<form action="" method="GET">
<input type="text" name="ind">
<input type="submit">
</form>
<?php
     include "../core/core.php";
     if (isset($_GET['ind']))
     {
         $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

     $r = $a->prepare("SELECT * FROM me WHERE ind = ? ");
     $r->execute(array($_GET['ind']));

     while( $rs = $r->fetch())
     {
         
 if($rs['ind']==$_GET['ind'])
{  
    $_SESSION['ps']=$rs['id'];
    $_SESSION['mdp']=$rs['mdp'];
    header('Location: modmdp.php');
}


}
 }
  
  ?>
  
  


