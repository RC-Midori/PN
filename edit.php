<?php 
	/* SELECCIONAR LOS DATOS A MOSTRAR*/
    include 'database/conexion.php';
	$id=$_GET['id'];
	$sql="SELECT * from data where id = '".$id."'";
	$resultado = mysqli_query($con, $sql);
		while($row=mysqli_fetch_assoc($resultado)) {
	?>

<?php
	/*ACTUALIZAR LOS DATOS*/
	if(isset($_POST['actualizar'])){ 
		$part_number=$_POST['part_number'];
		$v_part_number=$_POST['v_part_number'];
		$c_part_number=$_POST['c_part_number'];
		$description=$_POST['description'];
		$category=$_POST['category'];
		if ($part_number!=null || $description!=null) {
			$sql2="UPDATE data SET part_number='".$part_number."', v_part_number='".$v_part_number."', c_part_number='".$c_part_number."',
			 description='".$description."', category='".$category."' WHERE id='".$id."'" ;
			mysqli_query($con, $sql2);
			if ($nombre=1){
				header('location:index.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Edit</title>
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
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div>
                </div>
              </nav>
        </header>
		<div class="container mt-2">
        <h2 class="text-center">Edit Part</h2>
			<form class="formulario" method="post"><br>
				<input type="text" name="part_number" placeholder="Part Number" value="<?php echo $row['part_number'] ?>" class="form-control mb-3">
				<input type="text" name="v_part_number" placeholder="Vendor Part Number" value="<?php echo $row['v_part_number'] ?>" class="form-control mb-3">
				<input type="text" name="c_part_number" placeholder="Customer Part Number" value="<?php echo $row['c_part_number'] ?>" class="form-control mb-3">
				<input type="text" name="description" placeholder="Description" value="<?php echo $row['description'] ?>" class="form-control mb-3">
				<input type="text" name="category" placeholder="Category" value="<?php echo $row['category'] ?>" class="form-control mb-3">
				<a href="index.php" class="btn btn-danger">Cancel</a>
				<input type="submit" name="actualizar" class="btn btn-info" value="Save Edit">
			</form>
			<?php } ?>
		</div>
	</body>
</html>