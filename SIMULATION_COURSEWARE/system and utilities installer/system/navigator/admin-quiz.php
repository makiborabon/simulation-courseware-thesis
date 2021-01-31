<html>
	<head>
				<script type="text/javascript" src="jquery.js"></script>
		<title>Mushroom Admin view quiz</title>
		<style>
			body{
				background-image:url("../images/design/main-bg.png");
			}
			#navigator{

				width:88.6%;
				height:6%;
				position:absolute;
				top:5%;
				left:3%;

				background-color:white;
				border-radius:3px 3px 3px;
				
				font-family: verdana,helvetica,arial,sans-serif;
			}
			#log-out{
					float:right;
			}
			.selected{
				
			}
			#navigator>ul>li{
				list-style:none;
				display:inline;
				padding-right:25px;
				color:gray;
			}
			#navigator>ul>li>a{
				color:gray;
				text-decoration:none;

			}
			
			#navigator>ul>li>a:hover{
				color:464646;
			}

			#new{
				border-left:1px solid gray;
				
			}
			#new>a{
				padding-left:25px;
				
			}
			#main-container{
	
				width: 65%;
				height:80%;
				position: relative;
				top:10%;
				left:14%;
				border-radius:3px 0px 0px 3px;
				text-align:center;
				padding-left:7%;
				padding-top:2%;

			}

			#hide-container{
				background-image:url("../images/design/trans-bg.png");
				position:absolute;
				top:0%;
				left:0%;
				width:99.7%;
				height:99.7%;
			}

			#side-content{
				
				width:20%;
				height:80%;

				position: absolute;
				top: 12%;
				left: 3%;
				padding: 10px;
				overflow: scroll;

				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#side-content>ul>li{
				list-style:none;
			}
			#side-content>ul>li>a{
				text-decoration:none;
				color:gray;
			}
			#side-content>ul>li>a:hover{
				text-decoration:none;
				color:464646;
			}

			#quiz-content{
				
				width:65%;
				height:80%;

				position: absolute;
				top: 12%;
				left: 25%;
				padding: 10px;


				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#quiz-content-cont{
			
				width:96%;
				height:88%;

				top: 8%;
				left: 1%;
				padding: 10px;
				overflow: scroll;

				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#quiz-action{
				
				width:98%;
				height:6%;
			}
			#quiz-action-delete{
			
				width:4%;
				height:99%;
				float:right;
				background-image:url("../images/icon/delete-icon.png");
				background-repeat:no-repeat;
			}
			#quiz-action-delete:hover{
			

				background-image:url("../images/icon/delete-icon-hover.png");
				background-repeat:no-repeat;
			}
			#quiz-action-edit{
			
				width:4%;
				height:99%;
				float:right;
				background-image:url("../images/icon/edit-icon.png");
				background-repeat:no-repeat;
			}
			#quiz-action-edit:hover{
			

				background-image:url("../images/icon/edit-icon-hover.png");
				background-repeat:no-repeat;
			}

		</style>
		<script>
			$(document).ready(function(){

			$('#hide-container').hide();
			  $('#new').click(function(){
			    $('#hide-container').show();
			  });
			  $('#close').click(function(){
				$('#hide-container').hide();
				});
			});

			//ajax

			function showContent(str)
			{
			if (str=="")
			  {
			  document.getElementById("quiz-content-cont").innerHTML="";
			  return;
			  } 
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("quiz-content-cont").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","admin-quiz-ajax.php?q="+str,true);
			xmlhttp.send();
			}
		
		
		</script>
	</head>
	<body>
		<div id="navigator">
			<ul>
				<li><a href="admin-index.php" id="user" class="selected">Accounts</a></li>
				<li><a href="admin-module.php">Modules</a></li>
				<li><a href="admin-quiz.php">Quiz</a></li>
				<li id="new"><a href="sql/add-quiz.php" ">Add new</a></li>
				<li id="log-out"><a href="log-out.php" id="log-out">Log-out</a></li>
				
			</ul>
		</div>


			<div id="side-content">
					<?php
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM quiz ORDER BY id ASC");
						$ctr=1;
							echo "<ul>";
							while($row = mysql_fetch_array($res))
							{
								echo "<li><a href=\"#\" onClick=\"showContent(".$row['id'].")\">".$ctr.".&nbsp;".$row['question']."</a></li>";$ctr++;
							}//while
							echo "</ul>";

					?>			
			</div>
			<div id="quiz-content">

				<div id="quiz-content-cont"><h1>Select a Question to view.</h1></div>
			</div>


		<div id="hide-container"></div>
	
	</body>
</html>