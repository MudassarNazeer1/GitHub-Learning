<?php

$connect = mysqli_connect("localhost","root","");
if(!$connect)
{
	die("Connection failed".mysqli_error($connect));
}
$selectdb = mysqli_select_db($connect,'phone directory');
if (!$selectdb)
{
	die("Database Selection Failed".mysqli_error($connect));
}

?>