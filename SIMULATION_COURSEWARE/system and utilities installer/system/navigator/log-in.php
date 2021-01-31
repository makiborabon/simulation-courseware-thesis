<?php
	
	$error = " ";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$uname = $_POST["uname"];
		$password = $_POST["password"];
		$specs = " ";
		$identifier = 0;
	
				include("../includes/connection.php");
				$result=mysql_query("SELECT * FROM user");
				while($row = mysql_fetch_array($result))
				  {
					if($row['uname']==$uname && $row['password']==$password){
						session_start();
						$_SESSION['user_id']=$row['id'];
						$_SESSION['name']=ucfirst($row['fname'])."&nbsp;".ucfirst($row['lname']);

						$_SESSION['temper1']="";
						$_SESSION['temper2']="";
						
						$specs = $row['specs'];
						$identifier = 1;
						break;
					}
				  }

				if($identifier == 1){
					if($specs == "user"){header("Location: user_home.php");}
					if($specs == "admin"){header("Location: admin-index.php");}
				}
				if($identifier == 0){
					$error = "Oooops!!! Invalid user account!";
				}
	}//if($_SERVER['REQUEST_METHOD']=='POST')

?>
<html>
	<head>
			<link rel = "stylesheet" href = "../styles/log-in-css.css" type = "text/css"/>

		<style>

		</style>
	</head>
	<body>
		<div id = "main-body">
			<div id = "navigator">
				<ul>
					<li><a href = "#" id = "selected">sign-in</a></li>
				
				</ul>
			</div>
			<div id = "log-in-main">
				<div id = "content-form">
					<form action = "log-in.php" method = "post" > <span style = "color: red"><?php echo $error; ?></span>
						<input type = "text" value = "Username" id = "username" name = "uname"
						
						 onblur="if (this.value == '') {this.value = 'Username';}"
						 onfocus="if (this.value == 'Username') {this.value = '';}"
						
						/>
						<input type = "password" value = "Password" id = "password" name = "password" 
						
						 onblur="if (this.value == '') {this.value = 'Password';}"
						 onfocus="if (this.value == 'Password') {this.value = '';}"
						
						/>
						<input type = "submit" value = "sign-in" id = "submit" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>