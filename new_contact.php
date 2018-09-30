<?php
require_once ('connect.php');
error_reporting(0);
if (isset($_POST['new_contact'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $address=='') {
		echo "Please fill all field";
	}
	else{
	$CreateSql = "INSERT INTO `contact_list` (fname, lname, cellphone, email, address) VALUES ('".$fname."','".$lname."','".$phone."','".$email."','".$address."') ";
	$res = mysqli_query($connect, $CreateSql) or die(mysqli_error($connect));
	if ($res) {
		//echo "You contact saved successfully";
		header('location: contactlist.php');
	}else{
		echo "Data not save contact, please try again later";
		}
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Insert new contact </title>
</head>
<body bgcolor="lightblue" background="pic.jpg">
	<div style="border:1px solid gray;background-color:gray;text-align:center">
		<font face="arial"><h1> Insert New Contact </h1></font>
	</div><br>
	<Table cellpadding=5 align=center>
		<form method="post" action="new_contact.php">
			<tr>
				<td colspan=2> <h1><font face="arial"> Create New Contact </font></h1> </td>
			</tr>
			<tr>
				<td colspan=2> <hr height=20 width=100% align=center color=black> </td>
			</tr>
			<tr>
				<td><font face="arial"> First Name: </font></td>
				<td> <input type="text" name="fname" size=35 placeholder="first name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Last Name: </font></td>
				<td> <input type="text" name="lname" size=35 placeholder="last name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Cell Phone: </font></td>
				<td> <input type="text" name="phone" size="35" placeholder="cell phone"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Email: </font></td>
				<td> <input type="text" name="email" size=35 placeholder="username or email"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Address: </font></td>
				<td> <textarea rows=5 cols=36 name="address"> </textarea></td>
			</tr>
			<tr>
				<td colspan=2 align="center"> <input type="submit" name="new_contact" value="Save Contact">
				 <input type="reset" name="cancle" value="Cancle"> </td>
			</tr>
			<tr>
				<td colspan=2> <hr height=20 width=100% align=center color=black> </td>
			</tr>
			<tr>
				<td colspan=2> <b> If you would like to see your contact list, click here </b> <a href="contactlist.php"><b> Contact List </b></a> </td>
			</tr>
		</form>
	</table>
</body>
</html>