
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="">
	table {
		margin-top: 50px; 
		border: 1px solid; 
		background-origin: #eee; 
	}
td {
	border: 0px; 
	padding: 6px; 
}
th{
	border-bottom: 1px solid; 
	background-color: #ddd; 
}
</style>

<body>

<form  method="POST" action="addsession.php" >
	<table align="center">
		<tr>
			<th colspan="2"> <h2 align="center"> login</h2> 
			</th>

		</tr>
<tr>
		<td>username</td>
		<td> <input type="text" name="uname"></td>
	</tr>

	<tr>
		<td>password</td>
		<td> <input type="password" name="pwd"></td>
	</tr>

	<tr>
		<td align="right" colspan="2"> <input type="submit" name="login" value="login"> </td>

	</tr>
		

	</table>


</form>

</body>
</html>