<?php
error_reporting(0);
require_once ('connect.php');
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if ($email=='' && $pass=='') {
		echo "Please enter username and password";
	}
	else{
	$sql = "SELECT * FROM `customer` WHERE `email`= '".$email."' AND `password`='".$pass."';";
	$result = mysqli_query($connect, $sql);
	if (mysqli_num_rows($result)>0) {
		echo "Login Success";
		header('location: contactlist.php');
	}
	else{
		echo "Login failed";
	}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head>
<body bgcolor="lightblue" background="pic.jpg">
	<div style="border:1px solid gray;background-color:gray;text-align:center">
		<font face="arial"><h1> Online Phone Book </h1></font>
	</div><br>
	<Table cellpadding=5 align=center>
		<form method="post" action="login.php">
			<tr>
				<th colspan=2 align=center> <h1><font face="arial"> Login </font></h1> </th>
			</tr>
			<tr>
				<td><font face=arial> Username or Email: </font></td>
				<td> <input type="text" name="email" size=35 placeholder="username or email"> </td>
			</tr>
			<tr>
				<td><font face=arial> Password: </font></td>
				<td> <input type="password" name="pass" size=35 placeholder="password"> </td>
			</tr>
			<tr>
				<td colspan=2 align="center"> <input type="submit" value="Login" name="login"> </td>
			</tr>
			<tr>
				<td colspan=2> <hr height=20 width=100% align=center color=black> </td>
			</tr>
			<tr>
				<td colspan=2> <b> Don't have an account yet, </b> <a href="register.php"><b> Register </b></a> </td>
			</tr>
		</form>
	</table>
</body>
</html>