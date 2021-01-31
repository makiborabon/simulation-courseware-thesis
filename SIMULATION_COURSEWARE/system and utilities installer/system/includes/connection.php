<?php
	$con=mysql_connect("localhost", "root", "secret")or die("Cant connect".mysql_error());
	mysql_select_db("simulation-courseware-db", $con)or die("Can't found ". msql_error());

?>
