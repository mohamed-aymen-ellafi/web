<?php
session_start();
if (isset($_GET['captcha']))
{
    if ($_GET['captcha'] == $_SESSION['captcha'])
    {
        header('Location: register.php');

    }
    else
    {
        echo "<script type='text/javascript'>alert('wrong captcha');</script>";
    }
}

?>
    <link rel="stylesheet" type="text/css" href="4.css">

<form action="" method="GET">
<img src="captcha.php">
<p align="center">
<input type="text" name="captcha" placeholder="type the number">
<input type="submit"></p>
</form>