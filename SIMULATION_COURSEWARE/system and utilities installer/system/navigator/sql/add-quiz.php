<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$question = $_POST['question'];
		$choice1 = $_POST['choice1'];
		$choice2 = $_POST['choice2'];
		$choice3 = $_POST['choice3'];
		$answer = $_POST['answer'];

		include("../../includes/connection.php");
		mysql_query("INSERT INTO quiz(question, choice1, choice2, choice3, answer)
	VALUES ('$question', '$choice1', '$choice2', '$choice3', '$answer')") or die(mysql_error());

	header("Location:../admin-quiz.php");

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

			<div id="head">Add</div>
				<div id="content">
					<form action="add-quiz.php" method="post">
						Question:<br />
						<textarea cols = "50%" rows = "2" name = "question"></textarea>
						<br />
						Choice1:
						<br />
						<textarea cols = "50%" rows = "2" name = "choice1"></textarea>
						<br />
						Choice2:
						<br />
						<textarea cols = "50%" rows = "2" name = "choice2"></textarea>
						<br />
						Choice3:
						<br />
						<textarea cols = "50%" rows = "2" name = "choice3"></textarea>
						<br />
						Answer:
						<br />
						<select name = "answer">
							<option value="">-select answer-</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>						
						</select>



						<br />
						Note: Only number 1 to 3 can be entered in answer field.<br />



						<input type = "submit" value = "Save" id = "save"  onclick="return confirm('Please complete all the fields. \nNot sure? Click cancel and check the fields first.');"/> 
					</form>

				</div>
			<a href="../admin-quiz.php" id ="close"></a>
		</div>
		</div>


	</body>
</html>