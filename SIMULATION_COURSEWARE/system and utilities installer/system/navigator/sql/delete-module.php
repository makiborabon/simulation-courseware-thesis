<?php
	$id= $_GET['id'];

	include("../../includes/connection.php");
	mysql_query("DELETE FROM module WHERE id='$id'");

	header('Location:../admin-module.php');

?>