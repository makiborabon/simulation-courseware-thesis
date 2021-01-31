<?php

session_start();
$val=$_GET["val"];
$id=$_SESSION['user_id'];


	include("../includes/connection.php");
	$sql = "SELECT * FROM user_mushrooms WHERE user_id='$id' AND status='on-going'";

	$result = mysql_query($sql) or die(mysql_error());
	 while ($row = mysql_fetch_array($result)) {

		if($row['box']==$val){
			echo "The selected box is in used. Please clean it first before using again...";
		}

	 }

mysql_close($con);
?>