<?php
	date_default_timezone_set("Asia/Manila");



	$date=date("Y-m-d");
	$time=date(" h:i:s A ");


	echo $date."<br />".$time."<br />";

//date diff codes
	echo "date diff";
		$date1=date_create("07:08:09 PM");
		$date2=date_create("07:12:09 PM");

		$diff=date_diff($date2,$date1);

		echo $diff->format(" %i ");
///end date diff codes

?>