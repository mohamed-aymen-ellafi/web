<?php
function ajouter ()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

  
    $r=$a->prepare("INSERT INTO me(username,mail,mdp) VALUES (?,?,?)");
    $r->execute(array($_GET['username'],$_GET['mail'],$_GET['mdp']));
}
function ajouter_admin()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

  
    $r=$a->prepare("INSERT INTO `admin`(`nom`, `prenom`, `adresse`, `mail`, `num`, `cp`) VALUES (?,?,?,?,?,?)");
    $r->execute(array($_GET['nom'],$_GET['prenom'],$_GET['adresse'],$_GET['mail'],$_GET['num'],$_GET['cp']));
}

function afficher()
{ 
    
 $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
 $r = $a->query("SELECT * FROM `admin`  ORDER BY id  ");
 return $r;
  
}
function recherche()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("SELECT * FROM `admin` WHERE id = ?");
    $r->execute(array($_GET['id']));
     
   return $r;
}
function supprimer()
{
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r = $a->prepare("DELETE FROM `admin` WHERE id = ?");
    $r2 = $a->prepare("DELETE FROM `me` WHERE id = ?");
    $r->execute(array($_GET['id']));
    $r2->execute(array($_GET['id']));
}
function modifier()
{   
    $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
    $r=$a->prepare("UPDATE `me` SET 
    `username`=:username,`mail`=:mail,`mdp`=:mdp
    WHERE id=:id");
    $r->execute(array(
        'username' => $_GET['username'],
        'mail' => $_GET['mail'],
        'mdp' => $_GET['mdp'],
        'id' => $_GET['id']
    ));
    $r=$a->prepare("UPDATE `admin` SET `mail`=:mail
WHERE id=:id");
$r->execute(array(
    'mail' => $_GET['mail'],
    'id' => $_GET['id']
));
}
function recherche_compte()
{ $a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");

    $r = $a->prepare("SELECT * FROM me WHERE username = ? AND mdp = ? ");
$r->execute(array($_GET['username'],$_GET['mdp']));
return $r;

}



?>