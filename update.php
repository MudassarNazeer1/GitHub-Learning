<?php
	require_once ('connect.php');
	error_reporting(0);
	
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$get_contact = "select * from contact_list where ID = '$id'";
			$sql_get_contact = $connect->query($get_contact);
			$row = mysqli_fetch_assoc($sql_get_contact);
		}
?>

<?php
error_reporting(0);
if (isset($_POST['new_contact'])) {

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $address=='') {
		echo "Please fill all field";
	}
	else{
	$update_contact = "update contact_list set fname = '$fname', lname = '$lname', cellphone = '$phone', email = '$email',
					 address = '$address' where ID='$id'";
	$sql_update_contact = $connect->query($update_contact);
	if ($sql_update_contact) {
		header('Location: contactlist.php');
		}
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update contact </title>
</head>
<body bgcolor="lightblue" background="pic.jpg">
	<div style="border:1px solid gray;background-color:gray;text-align:center">
		<font face="arial"><h1> Update Contact List </h1></font>
	</div><br>
	<Table cellpadding=5 align=center>
		<form method="post" action="update.php">
			<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
			<tr>
				<td colspan=2> <h1><font face="arial"> Update Contact </font></h1> </td>
			</tr>
			<tr>
				<td colspan=2> <hr height=20 width=100% align=center color=black> </td>
			</tr>
			<tr>
				<td><font face="arial"> First Name: </font></td>
				<td> <input type="text" name="fname" size=35 value="<?php echo $row['fname'] ?>" placeholder="first name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Last Name: </font></td>
				<td> <input type="text" name="lname" size=35 value="<?php echo $row['lname'] ?>" placeholder="last name"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Cell Phone: </font></td>
				<td> <input type="text" name="phone" size=35 value="<?php echo $row['cellphone'] ?>" placeholder="cell phone"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Email: </font></td>
				<td> <input type="text" name="email" size=35 value="<?php echo $row['email'] ?>" placeholder="username or email"> </td>
			</tr>
			<tr>
				<td><font face="arial"> Address: </font></td>
				<td> <textarea rows=5 cols=36 name="address"><?php echo $row['address'] ?> </textarea></td>
			</tr>
			<tr>
				<td colspan=2 align="center"> <input type="submit" name="new_contact" value="Update Contact">
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