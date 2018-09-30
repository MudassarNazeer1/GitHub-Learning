<?php
require_once ('connect.php');
error_reporting(0);
if (isset($_POST['register'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $pass=='') {
		echo "Please fill all field";
	}
	else{
	$CreateSql = "INSERT INTO `customer` (fname, lname, phone, email, password) VALUES ('".$fname."','".$lname."','".$phone."','".$email."','".$pass."') ";
	$res = mysqli_query($connect, $CreateSql) or die(mysqli_error($connect));
	if ($res) {
		echo "You are registred successfully";
		//header('location: login.php');
	}else{
		echo "Data not inserted, please try again later";
		}
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Register </title>
</head>
<body bgcolor="lightblue" background="pic.jpg">
	<div style="border:1px solid gray;background-color:gray;text-align:center">
		<font face="arial"><h1> Online Phone Book </h1></font>
	</div><br>
	<Table cellpadding=5 align=center>
		<form method="post" action="register.php">
			<tr>
				<td colspan=2 align=center> <h1><font face="arial"> Register </font></h1> </td>
			</tr>
			<tr>
				<td><font face="arial"> First Name: </font></td>
				<td > <input type="text" name="fname" size=35 placeholder="first name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Last Name: </font></td>
				<td> <input type="text" name="lname" size=35 placeholder="last name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Phone No: </font></td>
				<td> <input type="text" size="35" name="phone" placeholder="phone no"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Email: </font></td>
				<td> <input type="text" name="email" size=35 placeholder="username or email"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Password: </font></td>
				<td> <input type="password" name="pass" size=35 placeholder="password"> </td>
			</tr>
			<tr>
				<td colspan=2 align="center"> <input type="submit" name="register" value="Register"> </td>
			</tr>
			<tr>
				<td colspan=2> <hr height=20 width=100% align=center color=black> </td>
			</tr>
			<tr>
				<td colspan=2> <b> If you have already account, please </b> <a href="login.php"><b> Login </b></a> </td>
			</tr>
		</form>
	</table>
</body>
</html>