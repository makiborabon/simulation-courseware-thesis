<?php

	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$topic = $_POST['topic'];
		$description = $_POST['description'];
		$content = $_POST['content'];
		$lesson = $_POST['lesson'];

		include("../includes/connection.php");
		mysql_query("INSERT INTO module(topic, description, content, lesson)
			VALUES ('$topic', '$description', '$content', '$lesson')") or die(mysql_error());

		header("Location:admin-module.php");
/*		$question = $_POST['question'];
		$choice1 = $_POST['choice1'];
		$choice2 = $_POST['choice2'];
		$choice3 = $_POST['choice3'];
		$answer = $_POST['answer'];

		include("../../includes/connection.php");
		mysql_query("INSERT INTO quiz(question, choice1, choice2, choice3, answer)
	VALUES ('$question', '$choice1', '$choice2', '$choice3', '$answer')") or die(mysql_error());

	header("Location:../quiz.php");

*/	}//if server

				include("../includes/connection.php");	
		$res=mysql_query("SELECT * FROM module ORDER BY lesson ASC");
			$less="";
		
			while($row = mysql_fetch_array($res))
			{
				$less=$row['lesson'];
			}//while
	

?>

<html>
	<head>
				
				<meta content="text/html; charset=utf-8" http-equiv="content-type"/>

				<script type="text/javascript" src="../editor/ckeditor.js"></script>
				<script src="../editor/sample.js" type="text/javascript"></script>
		<style>
			#body{
				background-image:url("../images/design/main-bg.png");
				position: absolute;
				top: 0px;
				left: 0px;
				width: 99.9%;
				height: 99.9%;
			}
			#edit-view{
				position: absolute;
					top: 10%;
					left: 10%;

				width: 70%;
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
				left:96%;
				width: 20px;
				height: 21px;

				background-image:url("../images/icon/close-icon.png");
			}
			#close:hover{
				width: 25px;
				height: 26px;

				background-image:url("../images/icon/close-icon-hover.png");
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
					<form action="add-module.php" method="post" name="add-module"
					onsubmit="return validate_form();">
						Topic:<br />
						<textarea  cols = "50%" rows = "2" name = "topic" ></textarea>
						<br />

						Lesson:
						<br />
						<textarea cols = "50%" rows = "2" name = "lesson" ><?php echo $less+1; ?></textarea>
						<br />						
						
						Description:
						<br />
						<textarea   cols = "50%" rows = "2" name = "description"></textarea>
						<br />
						Content:
						<br />
						<textarea   cols = "50%" rows = "2" name = "content" class="ckeditor"></textarea>
						<br />



						<input type = "submit" value = "Save" id = "save" onclick="return confirm('Please complete all the fields. \nNot sure? Click cancel and check the fields first.');"/>
					</form>

				</div>
			<a href="admin-module.php" id ="close"></a>
		</div>
		</div>


	</body>
<script language="javascript">
	function validate_form(){
		var _topic = document.add-module.topic;
		var _lesson = document.add-module.lesson;
		var _description = document.add-module.description;
		var _content = document.add-module.content;
		
			
			if (_topic.value=="" || _topic.value==null){
				_topic.focus();
				alert("Please add a topic.");
				return false;
					
			}
			if (_lesson.value=="" || _lesson.value==null){
				_lesson.focus();
				alert("Please add a lesson no.");
				return false;
					
			}
			if (_description.value=="" || _description.value==null){
				_description.focus();
				alert("Please add a description.");
				return false;
					
			}
			if (_content.value=="" || _content.value==null){
				_content.focus();
				alert("Please add a content.");
				return false;
					
			}

		}
</script>
</html>