<?php

	session_start();
	$user_identifier=$_SESSION['user_id'];

	$box=$_GET["box_no"];

	include("../includes/connection.php");
	mysql_query("DELETE FROM user_mushrooms WHERE user_id=$user_identifier AND box='$box'");

	header("Location:../user_home.php");

?>