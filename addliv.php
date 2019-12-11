<?php 
include('../../core/livreurC.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$salaire=$_POST['salaire'];
$hi=new livreur();
$hi->ajouterliv($nom,$prenom,$salaire);

?>