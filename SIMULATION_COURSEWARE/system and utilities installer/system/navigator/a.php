<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
	
			$userid = $_POST['uid'];
			$uname = $_POST['uname'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
echo $userid.$uname;
			include("../../includes/connection.php");


$sql = "UPDATE user SET uname='$uname', password='$password', fname='$fname', mname='$mname', lname='$lname' WHERE id=$userid;";
mysql_query($sql) or die(mysql_error());

header("Location:admin-home.php");
	}//if server
?>

<html>
	<head>
				<link rel = "stylesheet" href = "../../styles/home-style2.css" type = "text/css"/>
				<meta content="text/html; charset=utf-8" http-equiv="content-type"/>

				<script type="text/javascript" src="../../editor/ckeditor.js"></script>
				<script src="../../editor/sample.js" type="text/javascript"></script>
		<style>
			#body{
				background-image:url("../../images/design/bg-edit.png");
				position: absolute;
				top: 0px;
				left: 0px;
				width: 99.9%;
				height: 99.9%;
			}
			#edit-view{
				position: absolute;
					top: 10%;
					left: 30%;

				width: 40%;
				height: 80%;
				background-color: white;
				border-radius: 5px 5px;
				box-shadow: 10px 10px 10px #888888;
			}
			#head{
				height: 30px;
				font-size: 14pt;
				font-family: Tahoma;
				padding: 5px;
			}
			#content{
				font-size: 14pt;
				font-family: Tahoma;
				border: 1px solid gray;
				height: 80%;
				width: 90%;
				position: absolute;
				top: 10%;
				left: 3%;
				padding: 10px;
				overflow: scroll;
			}
			.text-input{
				height: 40px;
				width: 350px;
				margin: 5px;
				font-family: Tahoma;
				font-size: 12pt;
				padding-left:5px;
			}
			#close{
				position: absolute;
				top:5px;
				left:510px;
				width: 20px;
				height: 21px;

				background-image:url("../../images/icon/close-icon.png");
			}
			#close:hover{
				width: 25px;
				height: 26px;

				background-image:url("../../images/icon/close-icon-hover.png");
			}
			#update{
				font-family: Tahoma;
				font-size: 12pt;
				margin: 5px;
				width: 100px;
				height: 30px;
			}
			#hidden{
				width: 0px;
				height: 0px;
				display:none;
		</style>
	</head>
	<body>

		<div id = "main">
			<div id = "header"></div>
			<div id = "left-navi">
				<ul>
					<li><a href = "admin-home.php"  id="selected">User</a></li>
					<li><a href = "module.php" >Module/Lesson</a></li>
					<li><a href = "quiz.php" >Quiz question</a></li>
				</ul>
			</div>
			<div id = "middle-content">
				<div id = "search">

			</div>		
			</div>
			<div id = "right"></div>
			<div id = "cloud"></div>
		</div>

		<div id = "body">
		<div id = "edit-view">
			<div id="head">Edit</div>
			<div id="content">
			<form action="edit-uset.php" method="post">
			<?php

			$user_id = $_GET['id'];
			include("../../includes/connection.php");
			$result=mysql_query("SELECT * FROM user where id = ".$user_id."");
				while($row = mysql_fetch_array($result))
				  {

			echo "<input type=\"text\" value=\"".$row['id']."\" name = \"uid\" id = \"hidden\"/>".
			
				"Username: <br />".
				"<input type=\"text\" value=\"".$row['uname']."\" name=\"uname\" class=\"text-input\" /><br />".
				"Password: <br />".
				"<input type=\"text\" value=\"".$row['password']."\" name=\"password\" class=\"text-input\" /><br />".
				"First name: <br />".
				"<input type=\"text\" value=\"".$row['fname']."\" name=\"fname\" class=\"text-input\" /><br />".
				"Middle name: <br />".
				"<input type=\"text\" value=\"".$row['mname']."\" name=\"mname\" class=\"text-input\" /><br />".
				"Last name: <br />".
				"<input type=\"text\" value=\"".$row['lname']."\" name=\"lname\" class=\"text-input\" /><br />";
				  }//while end
				?>
				<input type = "submit" value = "Update" id = "update"/>
				</form>
				</div>
			<a href="../admin-home.php" id ="close"></a>
		</div>
		</div>


	</body>
</html>