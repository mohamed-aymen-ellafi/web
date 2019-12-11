 <?php
 include('../../core/commandeC.php');
session_start();
$id=$_SESSION['tool'];

$email=$_POST['email'];
$price=$_POST['price'];
$adress=$_POST['adress'];
$date=$_POST['date'];
echo $id;
$hi=new commande();
$hi->Modifiercommande($id,$email,$price,$adress,$date);




?>