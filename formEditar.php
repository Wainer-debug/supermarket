<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Super : El Poli Veci / Editar Producto</title>
    <link rel=" icon" href="images/logo_inicio.png">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
      <img src="./img/logo.jpg" style="height: 74px">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Editar Productos</span></a>
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
            <h1 class="h3 mb-0 text-gray-800">¿Deseas cambiar algo?</h1>

          </div>

          <?php
          include('config.php');
          $idProducto     = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
          $sqlProductos   = ("SELECT * FROM table_productos WHERE id='$idProducto' LIMIT 1");
          $queryProductos = mysqli_query($con, $sqlProductos);
          $dataProducto   = mysqli_fetch_array($queryProductos);
          ?>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-12">
              <div class="card mb-12">

                <div class="card-body">

                  <div class="col-md-6 mb-3">
                    <h3 class="text-center">Producto</h3>
                    <form method="POST" action="action.php?metodo=2" enctype="multipart/form-data">
                      <input type="text" name="id" value="<?php echo $dataProducto['id']; ?>" hidden>
                      <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreproducto" value="<?php echo $dataProducto['nombreproducto']; ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="text" name="precio" class="form-control" value="<?php echo $dataProducto['precio']; ?>">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" value="<?php echo $dataProducto['descripcion']; ?>">
                      </div>

                      <div class="mb-3">
                        <label for="categoria">Categoría</label>
                        <select class="form-select" name="categoria">
                          <?php
                          if ($dataProducto['categoria'] == "Despensa") {
                            echo '<option value="Despensa" selected>Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Dulces") {
                            echo '<option value="Dulces" selected>Dulces</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Lácteos") {
                            echo '<option value="Lácteos" selected>Lácteos</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Quesos y Fiambres") {
                            echo '<option value="Quesos y Fiambres" selected>Quesos y Fiambres</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Mi Bebe") {
                            echo '<option value="Mi Bebe" selected>Mi Bebé</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Limpieza y Aseo") {
                            echo '<option value="Limpieza y Aseo" selected>Limpieza y Aseo</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Vinos y Licores") {
                            echo '<option value="Vinos y Licores" selected>Vinos y Licores</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Carnes y Pescados") {
                            echo '<option value="Carnes y Pescados" selected>Carnes y Pescados</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Panaderia y Pasteleria") {
                            echo '<option value="Panaderia y Pasteleria" selected>Panadería y Pastelería</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Frutas y Verduras") {
                            echo '<option value="Frutas y Verduras" selected>Frutas y Verduras</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Congelados") {
                            echo '<option value="Congelados" selected>Congelados</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleiía">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Mascotas") {
                            echo '<option value="Mascotas" selected>Mascotas</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } elseif ($dataProducto['categoria'] == "Perfumeria y Farmacia") {
                            echo '<option value="Perfumeria y Farmacia" selected>Perfumeria y Farmacia</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Bebidas y Jugos">Bebidas y Jugos</option>';
                          } else {
                            echo '<option value="Bebidas y Jugos" selected>Bebidas y Jugos</option>';
                            echo '<option value="Despensa">Despensa</option>';
                            echo '<option value="Dulces">Dulces</option>';
                            echo '<option value="Lacteos">Lácteos</option>';
                            echo '<option value="Quesos y Fiambres">Quesos y Fiambres</option>';
                            echo '<option value="Mi Bebe">Mi Bebé</option>';
                            echo '<option value="Limpieza y Aseo">Limpieza y Aseo</option>';
                            echo '<option value="Vinos y Licores">Vinos y Licores</option>';
                            echo '<option value="Carnes y Pescados">Carnes y Pescados</option>';
                            echo '<option value="Panaderia y Pasteleria">Panadería y Pastelería</option>';
                            echo '<option value="Frutas y Verduras">Frutas y Verduras</option>';
                            echo '<option value="Congelados">Congelados</option>';
                            echo '<option value="Mascotas">Mascotas</option>';
                            echo '<option value="Perfumeria y Farmacia">Perfumeria y Farmacia</option>';
                          }
                          ?>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Actualiza tu imagen</label>
                        <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg">
                      </div>

                      <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn  btn btn-primary mt-3 mb-2">
                          Actualizar
                          <i class="bi bi-arrow-right-circle"></i>
                        </button>
                        <a href="./index2.php" class="btn btn-info mt-3 mb-2">
                          <i class="bi bi-arrow-left-circle"></i>
                          Volver
                        </a>
                      </div>
                    </form>
                  </div>



                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12">
              <div class="card mb-12">

                <div class="card-body">

                  <label class="form-label">Imagen actual del producto</label>
                  <br>
                  <br>
                  <img src="ImagenProductos/<?php echo $dataProducto['foto']; ?>" alt="Producto" class="card-img-top imagenProducto">

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