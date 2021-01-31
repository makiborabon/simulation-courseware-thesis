<html>
	<head>
				<script type="text/javascript" src="jquery.js"></script>
		<title>Mushroo Admin view users</title>
		<style>
			body{
				background-image:url("../images/design/main-bg.png");
			}
			#navigator{

				width:70%;
				height:6%;
				position:absolute;
				top:5%;
				left:15%;
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
				text-decoration:none;
				color:gray;
				
			}
			#new>a:hover{
				color:464646;
			}
			a:hover{

				color:464646;
				
			}

			#main-container{
	
				width: 71%;
				height:80%;
				position: relative;
				top:15%;
				left:14%;
				border-radius:3px 0px 0px 3px;
				

			}
			#table-data{
				position:absolute;
				top:0%;
				left:1%;

				width:100%;
				border:1px solid pink;
				font-family: verdana,helvetica,arial,sans-serif;

			}
			#title-tbl{
				background-color: 00a4da;
			}
			td{
				padding-left:20px;
			}
			.tr1{
				background-color:#FFFFFF;
				border:0px;
			}
			.tr2{
				background-color:bbedfe;
				border:0px;
			}
			#hide-container{
				background-image:url("../images/design/trans-bg.png");
				position:absolute;
				top:0%;
				left:0%;
				width:99.7%;
				height:99.7%;
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

			function showContent()
			{

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
				document.getElementById("hide-container").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","sql/add-user.php",true);
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
				<li id="new"><a href="#" onClick="showContent()">Add new</a></li>
				<li id="log-out"><a href="log-out.php" id="log-out">Log-out</a></li>
				
			</ul>


		</div>
		<div id="main-container">
					<?php
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM user");
							$ctr=0;
							echo "<table id = \"table-data\" border=\"0\">";
							echo "<tr id=\"title-tbl\"><td>Username</td><td>Password</td><td>Firstname</td><td>Middlename</td><td>Lastname</td><td>Specification</td><td>Action</td></tr>";
							while($row = mysql_fetch_array($res))
							{
								$ctr++;
								if($ctr==1){
								echo "<tr class=\"tr".$ctr."\"> <td>".$row['uname']."</td> <td>".$row['password']."</td> <td>".
									$row['fname']."</td> <td>".$row['mname']."</td> <td>".$row['lname'].
									"</td> <td>".$row['specs']."</td><td>".
									"<a href=\"sql/edit-uset.php?id={$row['id']}\" id = \"icon-edit\" name = \"edit\" value = \"edit\"><img src=\"../images/icon/edit-icon.png\" /></a>".
									"<a href=\"sql/delete-user.php?id={$row['id']} \" id = \"icon-delete\" ><img src=\"../images/icon/delete-icon.png\" ' onclick='return confirm(\"Are you sure to delete this record?\");' /></a>".
									"</td> </tr>";
								}
								if($ctr==2){
								echo "<tr class=\"tr".$ctr."\"> <td>".$row['uname']."</td> <td>".$row['password']."</td> <td>".
									$row['fname']."</td> <td>".$row['mname']."</td> <td>".$row['lname'].
									"</td> <td>".$row['specs']."</td><td>".
									"<a href=\"sql/edit-uset.php?id={$row['id']}\" id = \"icon-edit\" name = \"edit\" value = \"edit\"><img src=\"../images/icon/edit-icon.png\" /></a>".
									"<a href=\"sql/delete-user.php?id={$row['id']} \" id = \"icon-delete\" ><img src=\"../images/icon/delete-icon.png\" ' onclick='return confirm(\"Are you sure to delete this record?\");' /></a>".
									"</td> </tr>";$ctr=0;
								}


							}//while


							echo "</table>";

					?>
					
		</div>
		<div id="hide-container"></div>
	
	</body>
</html>