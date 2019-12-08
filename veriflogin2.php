<?php
include_once 'AdminC.php';
	if(isset($_POST['login']) && isset($_POST['password']))
{
	$adminC = new adminC();
	$result = $adminC->verifsuper($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
	header("location:../views/front/login.php"); 
		
	}
	else
	{
		session_start();
		$_SESSION['id'] = $result->id;
		$_SESSION['mdp'] = $result->mdp;
		$currentUrl = $_SESSION['currentURL'];
		

		header("location:../views/front/index.php?action=yes"); 
	}

}
else
{
	header("location:../views/front/login.php?err=champs");
}



 ?>