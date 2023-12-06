<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super : El Poli Veci / Productos</title>
    <link rel=" icon" href="images/logo_inicio.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ee8134 !important;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="./img/logo.jpg" style="height: 74px">
              
            </a>

            <!-- Divider -->
            <hr class=" sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index2.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Productos</span></a>
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
                        <h1 class="h3 mb-0 text-gray-800">Mis Productos</h1>
                    </div>
                    <?php
                    include('config.php');
                    $sqlProductos   = ("SELECT * FROM table_productos ORDER BY id DESC");
                    $queryProductos = mysqli_query($con, $sqlProductos);
                    $totalProductos = mysqli_num_rows($queryProductos);
                    ?>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-12">
                            <div class="card mb-4">

                                <div class="card-body">
                                    <h3 class="text-center">Agregar Producto</h3>
                                    <form method="POST" action="action.php" enctype="multipart/form-data">
                                        <input type="text" name="metodo" value="1" hidden>

                                        <div class="mb-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombreproducto" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Cantidad</label>
                                            <input type="number" name="cantidad" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Precio</label>
                                            <input type="text" name="precio" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Descripción</label>
                                            <input type="text" name="descripcion" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="categoria">Categoría</label>
                                            <select class="form-select" name="categoria" id="categoria" required>
                                                <option value="">Seleccione una categoría</option>
                                                <option value="Despensa">Despensa</option>
                                                <option value="Dulces">Dulces</option>
                                                <option value="Lácteos">Lácteos</option>
                                                <option value="Quesos y Fiambres">Quesos y Fiambres</option>
                                                <option value="Mi Bebe">Mi Bebé</option>
                                                <option value="Limpieza y Aseo">Limpieza y Aseo</option>
                                                <option value="Vinos y Licores">Vinos y Licores</option>
                                                <option value="Carnes y Pescados">Carnes y Pescados</option>
                                                <option value="Panaderia y Pasteleria">Panadería y Pastelería</option>
                                                <option value="Frutas y Verduras">Frutas y Verduras</option>
                                                <option value="Congelados">Congelados</option>
                                                <option value="Mascotas">Mascotas</option>
                                                <option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>
                                                <option value="Bebidas y Jugos">Bebidas y Jugos</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Imagen</label>
                                            <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg" required>
                                        </div>

                                        <div class="d-grid gap-2 col-12 mx-auto">
                                            <button type="submit" class="btn  btn btn-primary mt-3 mb-2">
                                                Registrar
                                                <i class="bi bi-arrow-right-circle"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $conteo = 1;
                                            while ($dataProducto = mysqli_fetch_array($queryProductos)) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo  $conteo++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataProducto['nombreproducto']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataProducto['cantidad']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataProducto['descripcion'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="detalles.php?id=<?php echo $dataProducto['id']; ?>" class="btn btn-warning mb-2" title="Detalle del producto <?php echo $dataProducto['nombreproducto']; ?>">
                                                            <i class="bi bi-info-lg"></i>Info</a>
                                                        <a href="formEditar.php?id=<?php echo $dataProducto['id']; ?>" class="btn btn-info mb-2" title="Actualizar datos del producto <?php echo $dataProducto['nombreproducto']; ?>">
                                                            <i class="bi bi-arrow-clockwise"></i>Actualizar</a>
                                                        <a href="action.php?id=<?php echo $dataProducto['id']; ?>&metodo=3&namePhoto=<?php echo $dataProducto['foto']; ?>" class="btn btn-danger mb-2" title="Eliminar producto <?php echo $dataProducto['nombreproducto']; ?>">
                                                            <i class="bi bi-trash-fill"></i>Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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