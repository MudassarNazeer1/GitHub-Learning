<?php
	require_once ('connect.php');
	error_reporting(0);
	$all_contacts = "SELECT * FROM contact_list";
	$sql_all_contacts = $connect->query($all_contacts);
	$total_contacts = $sql_all_contacts->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
	<title> Contact List </title>
</head>
<body bgcolor="lightblue" background="pic.jpg">
	<div style="border:1px solid gray;background-color:gray;text-align:center">
		<font face="arial"><h1> Contact List </h1></font>
	</div><br>
	<table cellpadding=5 align=center background="pic.jpg">
		<tr>
			<td colspan=3> <h1><font face="arial"> <?php echo $total_contacts ?> Contact in Phone book </font></h1> </td>
			<td colspan=2 align="right"> <a href="new_contact.php"><input type="button" value="New Contact"></a> </td>
		</tr>
		<tr>
			<td colspan=5> <hr height=20 width=100% align=center color=black> </td>
		</tr>
		<tr>
			<th align="left"> Name </th>
			<th align="left"> Cell Phone </th>
			<th align="left"> Email </th>
			<th align="left"> Address </th>
			<th align="left"> Action </th>
		</tr>
			<?php while ($row = mysqli_fetch_assoc($sql_all_contacts)) { ?>
		<tr>
			<td><?php echo $row['fname'] . " " . $row['lname'] ?></td>
			<td><?php echo $row['cellphone'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<td> <a href="update.php?id=<?php echo $row['ID'] ?>"> Edit </a> | <a href="delete.php?id=<?php echo $row['ID'] ?>"> Delete </a> </td> 
		</tr>
			<?php } ?>
	</table>
</body>
</html>