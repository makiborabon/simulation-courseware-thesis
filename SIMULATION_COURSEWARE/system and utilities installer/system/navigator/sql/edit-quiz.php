
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$qid = $_POST['qid'];
		$question = $_POST['question'];
		$choice1 = $_POST['choice1'];
		$choice2 = $_POST['choice2'];
		$choice3 = $_POST['choice3'];
		$answer = $_POST['answer'];

echo $qid.$question;
		include("../../includes/connection.php");
		$sql = "UPDATE quiz SET question='$question', choice1='$choice1', choice2='$choice2', choice3='$choice3', answer='$answer' WHERE id=$qid;";
mysql_query($sql) or die(mysql_error());
	header("Location:../admin-quiz.php");
/*			$userid = $_POST['uid'];
			$uname = $_POST['uname'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
echo $userid.$uname;
			include("../includes/connection.php");


$sql = "UPDATE user SET uname='$uname', password='$password', fname='$fname', mname='$mname', lname='$lname' WHERE id=$userid;";
mysql_query($sql) or die(mysql_error());

header("Location:admin-home.php");*/
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
				background-image:url("../../images/design/main-bg.png");
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



		<div id = "body">
		<div id = "edit-view">
			<div id="head">Edit</div>
				<div id="content">
					<form action="edit-quiz.php" method="post">

					<?php

					$quiz_id = $_GET['id'];
					include("../../includes/connection.php");
					$result=mysql_query("SELECT * FROM quiz where id = ".$quiz_id."");
						while($row = mysql_fetch_array($result))
						  {
							echo "<input type=\"text\" value = \"".$row['id']."\" name=\"qid\" id = \"hidden\"/>Question: <br /><textarea cols=\"50%\" rows=\"5\" name=\"question\" id = \"editor1\">".$row['question']."</textarea><br />Choice1: <textarea cols=\"50%\" rows=\"5\" name=\"choice1\"  >".$row['choice1']."</textarea><br />Choice2: <textarea cols=\"50%\" rows=\"5\" name=\"choice2\"  >".$row['choice2']."</textarea><br />Choice3: <textarea cols=\"50%\" rows=\"5\" name=\"choice3\"  >".$row['choice3']."</textarea><br />Answer: <br /><input type = \"text\" value=\"".$row['answer']."\" name=\"answer\"/>Note:&nbspOnly number 1 to 3 only are allowed.<br />";

						  }//while end
						?>
						<input type = "submit" value = "Update" id = "update"/>
						</form>

				</div>
			<a href="../admin-quiz.php" id ="close"></a>
		</div>
		</div>


	</body>
</html>