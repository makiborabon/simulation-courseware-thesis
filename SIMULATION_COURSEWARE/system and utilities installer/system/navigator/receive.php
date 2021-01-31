

<?php
	session_start();
	date_default_timezone_set("Asia/Manila");
	$temp=$_GET["temp"];
	$box_no=$_GET["box-no"];
	$kind=$_GET["type"];
	$date=date("Y-m-d");
	$time=date(" h:i:s A ");
	$trans="";
	$user_id=$_SESSION['user_id'];
	//echo "user id:>>".$user_id."<br>";
	if($temp>=14 && $temp<=25){
		$trans="60000";
	}
	if($temp>=26 && $temp<=35){
		$trans="90000";
	}
	if($temp>=36 && $temp<=40){
		$trans="180000";
	}
	if($temp>=41 && $temp<=100){
		$trans="hot_damage";
	}
	if($temp>=0 && $temp<=13){
		$trans="cold_damage";
	}

	//echo $date."<br />".$time."<br />".$trans;

//date diff codes
/*	echo "date diff";
		$date1=date_create("07:08:09 PM");
		$date2=date_create("07:12:09 PM");

		$diff=date_diff($date2,$date1);

		echo $diff->format(" %i ");
*///end date diff codes

		include("../includes/connection.php");

		mysql_query("INSERT INTO user_mushrooms(user_id, type, box, date, time, ins_status,dessease_status, age, trans_time, status, temp)
			VALUES ($user_id, '$kind', '$box_no', '$date', '$time', '0', '0', '0', '$trans', 'on-going','$temp')") or die(mysql_error());

			header("Location: user_home.php");

?>	
