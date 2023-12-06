<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super : El Poli Veci / Info Productos</title>
    <link rel=" icon" href="images/logo_inicio.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
                <img src="./img/logo.jpg" style="height: 74px">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index2.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Info Productos</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detalle del Producto</h1>

                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card mb-4">

                                <div class="card-body">
                                    <div class="container mt-3">
                                        <div class="row justify-content-md-center">


                                            <?php
                                            include('config.php');
                                            $idProducto      = ($_REQUEST['id']);
                                            //$idProducto      = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
                                            $sqlProductos   = ("SELECT * FROM table_productos WHERE id='$idProducto' LIMIT 1");
                                            $queryProductos = mysqli_query($con, $sqlProductos);
                                            $totalProductos = mysqli_num_rows($queryProductos);
                                            ?>

                                            <div class="col-md-8">
                                                <?php
                                                while ($dataProducto = mysqli_fetch_array($queryProductos)) { ?>
                                                    <div class="card" style="width: 30rem;">
                                                        <img src="ImagenProductos/<?php echo $dataProducto['foto']; ?>" alt="Imagen" class="card-img-top fotoPerfil">
                                                        <div class="card-body">
                                                            <p class="card-text titleProducto"><?php echo $dataProducto['nombreproducto']; ?></p>
                                                        </div>

                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item"><strong>Cantidad:</strong>
                                                                <?php echo $dataProducto['cantidad']; ?></li>
                                                            <li class="list-group-item"><strong>Precio:</strong>
                                                                <?php echo $dataProducto['precio']; ?></li>
                                                            <li class="list-group-item"><strong>Descripción:</strong>
                                                                <?php echo $dataProducto['descripcion']; ?></li>
                                                            <li class="list-group-item"><strong>Categoría:</strong>
                                                                <?php echo $dataProducto['categoria']; ?></li>
                                                            <li class="list-group-item"><strong>Fecha Registro:</strong>
                                                                <?php echo $dataProducto['fechaRegistro']; ?></li>
                                                        </ul>

                                                        <div class="card-body">
                                                            <div class="d-grid gap-2 col-12 mx-auto">
                                                                <a href="./index2.php" class="btn btn-primary mt-3 mb-2">
                                                                    <i class="bi bi-arrow-left-circle"></i>
                                                                    Volver
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
<?php
include('mensajes.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('.toast').toast('show');
    });
</script>

</html>