<?php
	$id= $_GET['id'];

	include("../../includes/connection.php");
	mysql_query("DELETE FROM user WHERE id='$id'");

	header('Location:../admin-index.php');

?>