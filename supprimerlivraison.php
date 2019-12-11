.<?php
include('../../core/livreurC.php');

if( $_POST['submit']=='delete')
{
$id=$_POST['idtest'];

$hi=new livreur();
$hi->supprimerliv($id);
 }
 if($_POST['submit']=='update')
{
session_start();
$_SESSION['tool']=$_POST['idtest'];
header("location: ../../views/backend/updatedelivrer.php");
	
}
?>