<?php
	include 'database/conexion.php';

	$sql="SELECT *FROM data ORDER BY id DESC";
	$resultado=mysqli_query($con,$sql);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
        <title>Datatables</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="style.css">
        <!--Datatable CSS-->
        <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
        <!--Datatables estilo bootstrap 4-->
        <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">
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
        <div style="height: 50px;">
        </div>
        <!--Ejemplo de tabla-->
        <div class="container">
        <form action="" class="formulario" method="post">
            <a href="database/insert.php" class="btn btn-primary text-light" aria-current="page">New</a>
        </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Part Number</th>
                                    <th class="text-center">Vendor Part Number</th>
                                    <th class="text-center">Client Part Number</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <td><?php echo $fila['part_number']; ?></td>
                                    <td><?php echo $fila['v_part_number']; ?></td>
                                    <td><?php echo $fila['c_part_number']; ?></td>
                                    <td><?php echo $fila['description']; ?></td>
                                    <td><?php echo $fila['category']; ?></td>
                                    <td><a href="edit.php?id=<?php echo $fila['id'];?>" class="btn btn-warning">Edit</a></td>
                                    <td><a href="delete.php?id=<?php echo $fila['id'];?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Jquery, Popper & Bootstrap JS-->
        <script src="jquery/jquery.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!--Datatables JS-->
        <script type="text/javascript" src="datatables/datatables.min.js"></script>
        <script type="text/javascript" src="main.js"></script>

    </body>
</html>