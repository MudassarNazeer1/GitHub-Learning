<?php

	if (isset($_GET['id'])) {

		require_once ('connect.php');
		$id = $_GET['id'];
		$delete_contact = "delete from contact_list where ID = '$id'";
		$sql_delete_contact = $connect->query($delete_contact);
		if ($sql_delete_contact == true) {
			header("Location: contactlist.php" );
		}
	}
?>