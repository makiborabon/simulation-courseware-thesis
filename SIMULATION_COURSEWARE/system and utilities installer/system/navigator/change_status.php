<?php

	session_start();
	$user_identifier=$_SESSION['user_id'];

	$box=$_GET["box_no"];

	include("../includes/connection.php");


	$sql = "UPDATE user_mushrooms SET status='harvest',trans_time='86400000'  WHERE user_id=$user_identifier AND box='$box';";
	mysql_query($sql) or die(mysql_error());

	header("Location:../user_home.php");

?>