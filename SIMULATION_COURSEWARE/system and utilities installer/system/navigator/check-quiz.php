
<?php



?>

<html>
	<head>
				<link rel = "stylesheet" href = "../styles/home-style2.css" type = "text/css"/>
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
				overflow:scroll;
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
				top:4%;
				left:93%;
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

		</style>
	</head>
	<body>

		<div id = "main">
			<div id = "header"></div>
			<div id = "left-navi">

			</div>
			<div id = "middle-content">
				<div id = "seasrch">

				</div>		
			</div>
			<div id = "right"></div>
			<div id = "cloud"></div>
		</div>

		<div id = "body">
		<div id = "edit-view">
			<div id="head">Quiz</div>
				<div id="content">
					<form action = "user-quiz.php" method = "post">
					<?php


							include("../includes/connection.php");
							$res=mysql_query("SELECT * FROM quiz");
								$num = 1;
								while($row = mysql_fetch_array($res))
								{
									$user_answer[$num]="No answer";
									
									$question[$num]=$row['question'];
									$c_answer[$num]=$row['answer'];
									$real_answer[$num]=$row['choice'.$c_answer[$num]];
									$answers[$num] = isset($_POST['answer'.$num]) ? $_POST['answer'.$num] : '';
									
									if($answers[$num]!=''){
										$user_answer[$num]=$row['choice'.$answers[$num]];
									}
									if($answers[$num]==''){
										$user_answer[$num]="No answer";
									}
									//$answers[$num]=$_POST['answer'.$num];
									$num++;


								}//while
								$point = 0;
								for($n=1; $n<$num; $n++){
								
									if($answers[$n] == $c_answer[$n]){
										echo "<p style=\"color:green;\">".$n.". &nbsp".ucfirst($question[$n])."<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".ucfirst($user_answer[$n])."</p>";
										
										
										$point++;
									}
									else{
										echo "<p style=\"color:red;\">".$n.". &nbsp".ucfirst($question[$n])."<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".ucfirst($user_answer[$n]).".&nbsp;The correct answer is&nbsp;<span style=\"color:green;\">".ucfirst($real_answer[$n])."</span></p>";
									
									}

								}
								$q = $num-1;
							echo "You got &nbsp;".$point."&nbsp;out of&nbsp;".$q."&nbsp;question";

							
						

					?>
					
					</form>
				</div>
			<a href="#" id ="close" onClick="window.close();"></a>
		</div>
		</div>


	</body>
</html>