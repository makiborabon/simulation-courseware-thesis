


<html>
	<head>
				<link rel = "stylesheet" href = "../../styles/home-style2.css" type = "text/css"/>
				<meta content="text/html; charset=utf-8" http-equiv="content-type"/>

				<script type="text/javascript" src="../../editor/ckeditor.js"></script>
				<script src="../../editor/sample.js" type="text/javascript"></script>
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


				</div>
			<a href="../admin-module.php" id ="close"></a>
		</div>
		</div>


	</body>
</html>