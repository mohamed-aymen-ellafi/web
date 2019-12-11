<?php

include('../../core/commandeC.php');
$email=$_POST['email'];
echo $email;
$adress=$_POST['adress'];
$price=$_POST['price'];
$status=$_POST['status'];
echo $status;
$date=$_POST['date'];
$x=new commande();
$x->ajoutercommandeandlivraison($email,$adress,$price,$status,$date);
?>