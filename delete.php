<?php 
	include 'database/conexion.php';
	$id=$_GET['id'];
	$sql="DELETE FROM data WHERE id='".$id."'";
	mysqli_query($con,$sql);
	header('Location:index.php');
 ?>