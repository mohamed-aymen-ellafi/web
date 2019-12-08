<?php
// information pour la connection à la DB
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'alibaba'; // nom de votre base de donnée
//------- on affiche la date et l'heure -------------

$now_Y = date("Y");
$now_m = date("m");
$now_d = date("d");
$now_H = date("H");
$now_i = date("i");
$now_s = date("s");

$date = "$now_d-$now_m-$now_Y à $now_H:$now_i:$now_s";

// connection à la DB
$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());
?>