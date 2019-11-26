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
     include "../core/core.php";

            $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    if (isset($_GET['id']))
    { 
        if (isset($_GET['username']))
        {
        $r = $a->prepare("SELECT * FROM me WHERE username = ? ");
        $r->execute(array($_GET['username']));
        while( $rs = $r->fetch())
        {
           
        if(!empty($_GET['username']) AND $rs['username']==$_GET['username'])
        {
          
        echo "<script type='text/javascript'>alert('this username already existes please change');</script>";
        }
        else
        {     modifierusername();

        }

        }
        }
        
        if (isset($_GET['mail']))
        {
        $r = $a->prepare("SELECT * FROM me WHERE mail = ? ");
        $r->execute(array($_GET['mail']));
        while( $rs = $r->fetch())
        {
           
        if(!empty($_GET['mail']) AND $rs['mail']==$_GET['mail'])
        {
        echo "<script type='text/javascript'>alert('this mail already existes please change');</script>";
        }
        else
        {
            modifiermail();

        }
        }
        }  
        if (isset($_GET['mdp'],$_GET['mdp2']) AND !empty($_GET['mdp']) AND !empty($_GET['mdp2']))
        {
            $pass=$_GET['mdp'];
            $passCNF=$_GET['mdp2'];
       
        if($passCNF==$pass)
        {   
            modifiermdp();
        }
        else 
        {
            
            echo "<script type='text/javascript'>alert('the passwords are not identical');</script>";
        }  
         }

         if (isset($_GET['adresse']) AND !empty($_GET['adresse']))
         {
             $r=$a->prepare("UPDATE `admin` SET 
         `adresse`=:adresse
         WHERE id=:id");
         $r->execute(array(
             'adresse' => $_GET['adresse'],
             'id' => $_GET['id']
         ));
         }
         if (isset($_GET['num']) AND !empty($_GET['num']))
{
    $num=$_GET['num'];

if(strlen($num)==8)
{
         if (isset($_GET['num']) AND !empty($_GET['num']))
         {
             $r=$a->prepare("UPDATE `admin` SET 
         `num`=:num
         WHERE id=:id");
         $r->execute(array(
             'num' => $_GET['num'],
             'id' => $_GET['id']
         ));
         }
        }
        else
        {
            echo "<script type='text/javascript'>alert('wrong number');</script>";

        }
    }
    if (isset($_GET['cp']) AND !empty($_GET['cp']))
    {
        $cp=$_GET['cp'];
    
    if(strlen($cp)==4)
    {
        
    
         if (isset($_GET['cp']) AND !empty($_GET['cp']))
         {
             $r=$a->prepare("UPDATE `admin` SET 
         `cp`=:cp
         WHERE id=:id");
         $r->execute(array(
             'cp' => $_GET['cp'],
             'id' => $_GET['id']
         ));
         }
        }
        else
        {
            echo "<script type='text/javascript'>alert('wrong postal code');</script>";

        }
    }

         if (isset($_GET['city']) AND !empty($_GET['city']))
         {
             $r=$a->prepare("UPDATE `admin` SET 
         `city`=:city
         WHERE id=:id");
         $r->execute(array(
             'city' => $_GET['city'],
             'id' => $_GET['id']
         ));
         }

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
         <td>adress</td>
         <td><input type="text" name="adresse" ></td>
     </tr>
     <tr>
         <td>number</td>
         <td><input type="text" name="num" ></td>
     </tr>
     <tr>
         <td>postal code</td>
         <td><input type="text" name="cp" ></td>
     </tr>
     <tr>
         <td>city</td>
         <td><input type="text" name="city" ></td>
     </tr>
     
     <tr>
         <td>password</td>
         <td><input type="text" name="mdp" ></td>
     </tr>
     <tr>
         <td>password verification</td>
         <td><input type="text" name="mdp2" ></td>
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