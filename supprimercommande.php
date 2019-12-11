<?php
include('../../core/commandeC.php');

$hi=new commande();

if( $_POST['submit']=='delete')
{
$id=$_POST['idtest'];
$hi->Supprimercommande($id);
}
if($_POST['submit']=='Map')
{
session_start();
$_SESSION['tool']=$_POST['adress'];
header("location: ../../views/backend/map.php");
}
if($_POST['submit']=='update')
{
session_start();
$_SESSION['tool']=$_POST['idtest'];
header("location: ../../views/backend/modifier.html");
	
}




?>