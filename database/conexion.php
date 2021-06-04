<?php
	$host = "localhost";
	$database='partnumber';
	$user='root';
	$password='';

	$con=mysqli_connect($host,$user,$password);
	mysqli_select_db($con, $database);
?>