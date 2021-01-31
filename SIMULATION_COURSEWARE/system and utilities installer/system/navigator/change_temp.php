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
	
	if($temp>23){

		$temp=$temp-1;
	}


		$sql = "UPDATE user_mushrooms SET temp='$temp' WHERE  user_id='$user_identifier' AND box='$box' LIMIT 1;";
		mysql_query($sql) or die(mysql_error());

	if($box=="1"){
		$_SESSION['temper1']=$temp;
	}
	if($box=="2"){
		$_SESSION['temper2']=$temp;
	}

	header("Location:../user_home.php");

?>

	<script type="text/javascript" src="../script/user_home.js"></script>

	<script>
		changeSpanTemp("<?php echo $box; ?>");
	</script>