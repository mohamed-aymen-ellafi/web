<?php
session_start();
?>
    <link rel="stylesheet" type="text/css" href="4.css">
    <h1>modify your password</h1>
    <form action="" method="GET">
    <input type="text" name="id" value ="<?php  echo $_SESSION['ps']; ?>" style="display:none" >
    <input type="text" name="mdp" placeholder="<?php  echo $_SESSION['mdp']; ?>">
    <input type="submit">
    </form>
    <?php
         include "../core/core.php";

       if (isset($_GET['mdp']) AND !empty($_GET['mdp']) )
       {
        
           modifiermdp();
           header('Location: connexion.php');

       }
?>
