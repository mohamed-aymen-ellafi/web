<?php 

$uname="zahra"; 
$pwd="zahra"; 

session_start(); 



if ($_POST['uname']==$uname && $_POST['pwd']==$pwd)
 {
 	$_SESSION['uname']=$uname; 

header('Location: main.php');

 }
 else {
 	echo "<script> alert('username or password incorrect!') </script>"; 
 	echo "<script>location.href='login.php'</script>";
 }


?>