

<html>
	<head>
				<link rel = "stylesheet" href = "../styles/home-style2.css" type = "text/css"/>
				<meta content="text/html; charset=utf-8" http-equiv="content-type"/>

				<script type="text/javascript" src="../editor/ckeditor.js"></script>
				<script src="../editor/sample.js" type="text/javascript"></script>
		<style>

		</style>

	</head>
	<body>
		<div id = "main">
			<div id = "header"></div>
			<div id = "left-navi">
				<ul>
					<li><a href = "admin-home.php">User</a></li>
					<li><a href = "module.php"   id="selected">Module/Lesson</a></li>
					<li><a href = "quiz.php" >Quiz question</a></li>
				</ul>
			</div>
			<div id = "middle-content">
											<div id = "add"><a href="sql/add-module.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></div>

				<div id = "search">
					<?php
					
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM module");

							while($row = mysql_fetch_array($res))
							{
								echo "<p><b>Topic:</b>".$row['topic']."</p><p><b>Description:</b> ".$row['description']."</p><p><b>content: </b>".$row['content']."</p><p><b>Lesson:</b> ".$row['lesson']."</p><br /> <a href=\"sql/edit-module.php?id={$row['id']}\" id = \"icon-edit\" name = \"edit\" value = \"edit\"><img src=\"../images/icon/edit-icon.png\" /></a>".
									"<a href=\"sql/delete-module.php?id={$row['id']} \" id = \"icon-delete\" ><img src=\"../images/icon/delete-icon.png\" ' onclick='return confirm(\"Are you sure to delete this record?\");' /></a><hr />";

							}//while
					
					
					?>
					
				</div>		
				</div>
				<div id = "right"></div>
				<div id = "cloud"></div>
			</div>
	</body>
</html>