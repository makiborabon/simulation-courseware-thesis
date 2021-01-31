<?php
	session_start();
	$user_identifier=$_SESSION['user_id'];

	$box=$_GET["box_no"];

	include("../includes/connection.php");

	$sql = "UPDATE user_mushrooms SET ins_status='1' WHERE  user_id='$user_identifier' AND box='$box' LIMIT 1;";
		mysql_query($sql) or die(mysql_error());


?>