<?php
		
		
		$fname_value = "First name";
		$mname_value = "Middle name";
		$lname_value = "Last name";
		$uname_value = "User name";
		$password_value = "Password";
		
		$fname_error = " ";
		$mname_error = " ";
		$lname_error = " ";
		$uname_error = " ";
		$password_error = " ";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$identifier = 0;

		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$uname = $_POST["uname"];
		$password = $_POST["password"];

		include("../includes/connection.php");

		$result=mysql_query("SELECT * FROM user");
		while($row = mysql_fetch_array($result))
		  {
			if($fname == "First name" || $mname == "Middle name" || $lname == "Last name" ||
				$uname == "User name" || $password == "Password" ){

				if($fname == "First name"){$fname_error = "Invalid First name (<b>".$fname."</b>)";}
				if($mname == "Middle name"){$mname_error = "Invalid Middle name (<b>".$mname."</b>)";}
				if($lname == "Last name"){$lname_error = "Invalid Last name (<b>".$lname."</b>)";}
				if($uname == "User name"){$uname_error = "Invalid User name (<b>".$uname."</b>)";}
				if($password == "Password"){$password_error = "Invalid Password (<b>".$password."</b>)";}
				$identifier = 1;
				break;
				}

			if($row['uname']==$uname){
				$uname_error = "User name (<b>".$uname."</b>) already in used!";

				$fname_value = $fname;
				$mname_value = $mname;
				$lname_value = $lname;
				$uname_value = $uname;
				$password_value = $password;

				$identifier = 1;

				break;
			}//if
		  }//while
		  if($identifier==0){
		mysql_query("INSERT INTO user(uname,password,fname, mname,lname,specs)
		VALUES ('$uname','$password', '$fname','$mname','$lname','user')") or die(mysql_error());

		header("Location: log-in.php");
		  }//if($identifier==0)
	}//if $_server		
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
					<li><a href = "log-in.php">sign-in</a></li>
					<li><a href = "sign-up.php" id = "selected">sign-up</a></li>
				</ul>
			</div>
			<div id = "log-in-main">
				<div id = "content-form">
					<form action = "sign-up.php" method = "post"> <br /> <br />
						<input type = "text" value = "<?php echo $fname_value; ?>" class = "field" name = "fname" 
						
						 onblur="if (this.value == '') {this.value = 'First name';}"
						 onfocus="if (this.value == 'First name') {this.value = '';}"
						
						/> <span style = "color: red;"><?php echo $fname_error; ?></span>  <br /> <br />
						<input type = "text" value = "<?php echo $mname_value; ?>" class = "field" name = "mname" 
						
						 onblur="if (this.value == '') {this.value = 'Middle name';}"
						 onfocus="if (this.value == 'Middle name') {this.value = '';}"
						
						
						/> <span style = "color: red;"><?php echo $mname_error; ?></span>  <br /> <br />
						<input type = "text" value = "<?php echo $lname_value; ?>" class = "field" name = "lname" 
						
						 onblur="if (this.value == '') {this.value = 'Last name';}"
						 onfocus="if (this.value == 'Last name') {this.value = '';}"
						
						
						/> <span style = "color: red;"><?php echo $lname_error; ?></span>  <br /> <br />
						<input type = "text" value = "<?php echo $uname_value; ?>" class = "field" name = "uname" 
						
						 onblur="if (this.value == '') {this.value = 'User name';}"
						 onfocus="if (this.value == 'User name') {this.value = '';}"
						
						
						/> <span style = "color: red;"><?php echo $uname_error; ?></span> <br /> <br />
						<input type = "text" value = "<?php echo $password_value; ?>" class = "field" name = "password"
						
						
						 onblur="if (this.value == '') {this.value = 'Password';}"
						 onfocus="if (this.value == 'Password') {this.value = '';}"
					
						/> <span style = "color: red;"><?php echo $password_error; ?></span>  <br /> <br />
						<input type = "submit" value = "sign-up" id = "submit-sup" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>