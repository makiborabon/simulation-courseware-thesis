<html>
	<head>
				<link rel = "stylesheet" href = "../../styles/home-style2.css" type = "text/css"/>
				<meta content="text/html; charset=utf-8" http-equiv="content-type"/>

				<script type="text/javascript" src="../editor/ckeditor.js"></script>
				<script src="../editor/sample.js" type="text/javascript"></script>
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
			#upper-navi{
				position:absolute;
				top:14%;
				left:65%;
			}
			#upper-navi > ul > li{
				display:inline;
				margin-left:5px;
			}
			#upper-navi > ul > li > a{
				text-decoration:none;
				color:white;
				font-size:14pt;
				font-family: BrowalliaUPC;
			}
			#upper-navi > ul > li > a:hover{
				text-decoration:none;
				color:gray;
				font-size:14pt;
				font-family: BrowalliaUPC;
			}

		</style>
			<script language="javascript" type="text/javascript">
				function divContent(divTitle, divcontent ){
				var div = document.getElementById("search") ;
					if( div )
					{
						div.innerHTML = "<h3>"+divTitle+"</h3>\n<p>"+divcontent+"</p>";
					}
				}

			</script>
	</head>
	<body>

		<div id = "main">
			<div id = "header">
			<div id="upper-navi">
				<ul>
					<li><a href="../user_home.php">Back to simulation</a></li>

					
				</ul>
			</div>			
			</div>
			<div id = "left-navi">
					
			</div>
			<div id = "middle-content">
				<div id = "search">
				<?php
						include("../../includes/connection.php");
						$res=mysql_query("SELECT * FROM module");

							while($row = mysql_fetch_array($res))
							{					
					
								echo "<h3>".$row['topic']."</h3>".$row['description']."<br />".$row['content']."";
							}
				?>
				</div>		
			</div>
			<div id = "right">
				<ul>

				<?php
	/*					include("../../includes/connection.php");
						$res=mysql_query("SELECT * FROM module");

							while($row = mysql_fetch_array($res))
							{					
					
								echo "<li><a href=\"#\" onClick=\"divContent('".$row['description']."','".$row['content']."')\">".$row['topic']."</a></li>\n";
							}
				*/?></ul>
			
			</div>
			<div id = "cloud"></div>
		</div>

	</body>
</html>