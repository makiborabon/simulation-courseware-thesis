

<html>
	<head>
				<link rel = "stylesheet" href = "../styles/home-style2.css" type = "text/css"/>
		<style>
				.quiz{
					border-bottom: 1px solid gray;
					margin-left: 5%;
					padding-bottom: 5px;
					width:90%;
				}
		</style>
	</head>
	<body>
		<div id = "main">
			<div id = "header"></div>
			<div id = "left-navi">
				<ul>
					<li><a href = "admin-home.php">User</a></li>
					<li><a href = "module.php" >Module/Lesson</a></li>
					<li><a href = "quiz.php"  id="selected" >Quiz question</a></li>
				</ul>
			</div>
			<div id = "middle-content">
								<div id = "add"><a href="sql/add-quiz.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></div>
								
				<div id = "search">

					<?php
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM quiz");

							while($row = mysql_fetch_array($res))
							{

								echo "<div class = \"quiz\"> Question:&nbsp ".$row['question']."<br />Choice1:&nbsp ".$row['choice1']."<br />Choice2:&nbsp".$row['choice2']."<br />Choice3:&nbsp".$row['choice3']."<br />Answer:&nbsp ".$row['answer']."<br /> <a href=\"sql/edit-quiz.php?id={$row['id']}\" id = \"icon-edit\" name = \"edit\" value = \"edit\"><img src=\"../images/icon/edit-icon.png\" /></a>".
									"<a href=\"sql/delete-quiz.php?id={$row['id']} \" id = \"icon-delete\" ><img src=\"../images/icon/delete-icon.png\" ' onclick='return confirm(\"Are you sure to delete this record?\");' /></a>"." </div>";

							}//while


						

					?>
				</div>		
			</div>
			<div id = "right"></div>
			<div id = "cloud"></div>
		</div>
	</body>
</html>