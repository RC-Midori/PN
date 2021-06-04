<?php 
	include 'conexion.php';
	if(isset($_POST['guardar'])){
		$part_number=$_POST['part_number'];
		$v_part_number=$_POST['v_part_number'];
		$c_part_number=$_POST['c_part_number'];
		$description=$_POST['description'];
		$category=$_POST['category'];

		if($part_number!=null || $v_part_number!=null || $c_part_number!=null ||
			$description!=null){

			$sql="INSERT INTO data(part_number, v_part_number, c_part_number, description, category)
			VALUES('".$part_number."','".$v_part_number."','".$c_part_number."','".$description."','".$category."')";
				mysqli_query($con,$sql);
				if($part_number=1){
				    header('Location:../index.php');
				}
		}else{
			echo "Alerta: Los campos estan vacios";
			return false;
	    }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>New Part Number</title>
	<link href="/dashboard/stylesheets/style.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white">MIDORI - Part Numbers</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
    </header>
	<div class="container mt-3">
	<h2 class="text-center">Add New Part</h2>
	<form method="post">
			<div class="form-group">
				<input type="text" name="part_number" placeholder="Part Number" class="form-control">
				<input type="text" name="v_part_number" placeholder="Vendor Part Number" class="form-control mt-2">
			</div>
			<div class="form-group">
				<input type="text" name="c_part_number" placeholder="Customer Part Number" class="form-control mt-2">
				<input type="text" name="description" placeholder="Description" class="form-control mt-2">
				<input type="text" name="category" placeholder="Category" class="form-control mt-2">
			</div>
			<div class="mt-3">
				<a href="../index.php" class="btn btn-danger">Cancel</a>
				<input type="submit" name="guardar" value="Save" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>