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
     $er=0;
     $ar=0;


            $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    if (isset($_GET['id']))
    { 
        if (isset($_GET['username']))
 {
   $r=recherche_username();
   
    while( $rs = $r->fetch())
 {
    
 if(!empty($_GET['username']) AND $rs['username']==$_GET['username'])
 {
     $er=1;
 echo "<script type='text/javascript'>alert('this username already existes please change');</script>";
 }
 else
 {
     $er=0;

 }
 }
 if (!empty($_GET['username']) AND $er==0)
 {
    modifierusername();
	
 }

 }
         
        if (isset($_GET['mail']))
        {
            $f=recherche_mail();

        while( $fs = $f->fetch())
        {
           
        if(!empty($_GET['mail']) AND $fs['mail']==$_GET['mail'])
        {
            $ar=1;
        echo "<script type='text/javascript'>alert('this mail already existes please change');</script>";
        }
        else
        {
           $ar=0;

        }
        }
        if (!empty($_GET['mail']) AND $ar==0)
{
    
    modifiermail();

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
            modifieradresse();
        
         }
         if (isset($_GET['num']) AND !empty($_GET['num']))
{
    $num=$_GET['num'];

if(strlen($num)==8)
{
         if (isset($_GET['num']) AND !empty($_GET['num']))
         {
            modifiernum();
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
            modifiercp();
         }
        }
        else
        {
            echo "<script type='text/javascript'>alert('wrong postal code');</script>";

        }
    }

         if (isset($_GET['city']) AND !empty($_GET['city']))
         {
            modifiercity();

         }

        }
        if (isset($_GET['sub']))
        {

           header('Location: connexion.php');

        }
    
       
     
?>
<form action="" method="GET">
<table border="1">
         <input type="text" name="id"  value="<?PHP echo $_SESSION['ps'] ;?>" style="display:none">
    
     <tr>
         <td>username</td>
         <td><input type="text" name="username" placeholder="<?PHP echo $_SESSION['username'] ;?>"></td>
     </tr>
     <tr>
         <td>adress</td>
         <td><input type="text" name="adresse" placeholder="<?PHP echo $_SESSION['adresse'] ;?>"></td>
     </tr>
     <tr>
         <td>mail</td>
         <td><input type="email" name="mail" placeholder="<?PHP echo $_SESSION['mail'] ;?>" ></td>
     </tr>
  
     <tr>
         <td>number</td>
         <td><input type="text" name="num" placeholder="<?PHP echo $_SESSION['num'] ;?>"></td>
     </tr>
     <tr>
         <td>postal code</td>
         <td><input type="text" name="cp" placeholder="<?PHP echo $_SESSION['cp'] ;?>" ></td>
     </tr>
     <tr>
         <td>city</td>
         <td><input type="text" name="city" placeholder="<?PHP echo $_SESSION['city'] ;?>"></td>
     </tr>
     
     <tr>
         <td>password</td>
         <td><input type="text" name="mdp" placeholder="<?PHP echo $_SESSION['mdp'] ;?>" ></td>
     </tr>
     <tr>
         <td>password verification</td>
         <td><input type="text" name="mdp2" placeholder="<?PHP echo $_SESSION['mdp'] ;?>" ></td>
     </tr>
     <tr>
         <td></td>
         <td><input type="submit" value="confirmer la modifier" name="sub"></td>
     </tr>
     </table>


</form> <br>
<a href="store.php">back to the store</a>

</body>
</html>