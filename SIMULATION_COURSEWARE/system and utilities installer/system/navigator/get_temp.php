<?php

	session_start();
	$user_identifier=$_SESSION['user_id'];

	$box=$_GET["box_no"];

	include("../includes/connection.php");

		$res=mysql_query("SELECT * FROM user_mushrooms WHERE user_id='$user_identifier' AND box='$box' LIMIT 1");
		$temp;
	
			while($row = mysql_fetch_array($res))
			{
				$temp=$row['temp'];
			}//while

	echo "<script>alert('".$temp."');</script>";
	

?>