<?php
	$id= $_GET['id'];

	include("../../includes/connection.php");
	mysql_query("DELETE FROM quiz WHERE id='$id'");

	header('Location:../admin-quiz.php');

?>