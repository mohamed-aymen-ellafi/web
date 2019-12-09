<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="3.css">

    <title>chat box</title>
</head>
<body align="center">
    <?php
$a = new PDO("mysql:host=127.0.0.1;dbname=em","root","");
if (isset($_GET['username']) AND isset($_GET['msg']) AND !empty($_GET['username']) AND !empty($_GET['msg']))
{
    $r=$a->prepare("INSERT INTO `chat`(`username`, `msg`) VALUES (?,?)");
    $r->execute(array($_GET['username'],$_GET['msg']));
    
}
$r = $a->query("SELECT * FROM chat");
?>
<table align="center" border="1">
<tr>

<td>

<table align="center">
<?php
while( $rs = $r->fetch())
{


?>
<tr>
<td><b> <?PHP echo $rs['username'];?> </b> </td>
<td><?PHP echo $rs['msg'];?></td>

<?PHP
}

?>
</table>
</td></tr>
</table>
<form method="GET" action="">
    <input type="text" placeholder="username" name="username" value ="<?PHP echo $_SESSION['username'];?>" style="display:none">
    <br>
    <input type="text" placeholder="message" name="msg" width="100%">
    <br>
    <input type="submit" value="send">
    
    </form>
    <a href="store.php">back to the store</a>
</body>
</html>