<?php
include('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');

$metodoAction = (int) filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);

// $metodoAction == 1, Crear un nuevo registro
if($metodoAction == 1){

    $fechaRegistro = date('d-m-Y H:i:s A', time()); 
    $nombreproducto = filter_var($_POST['nombreproducto'], FILTER_SANITIZE_STRING);
    $cantidad = (int) filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);

    // Información de la imagen
    $filename = $_FILES["foto"]["name"]; // Nombre de la imagen
    $tipo_foto = $_FILES['foto']['type']; // Tipo de archivo
    $sourceFoto = $_FILES["foto"]["tmp_name"]; // URL temporal de la imagen
    $tamano_foto = $_FILES['foto']['size']; // Tamaño de la imagen

// Se comprueba si la imagen a cargar es valida observando su extensión y tamaño, 100000 = 1 MB
if (!((strpos($tipo_foto, "PNG") || strpos($tipo_foto, "jpg") && ($tamano_foto < 100000)))) {
    // Se renombra la imagen 
    $logitudPass = 8;
    $newNameFoto = substr( md5(microtime()), 1, $logitudPass);
    $explode = explode('.', $filename);
    $extension_foto = array_pop($explode);
    $nuevoNameFoto = $newNameFoto.'.'.$extension_foto;

    // Se verifica si existe el directorio, de lo contrario se crea
    $dirLocal = "ImagenProductos";
    if (!file_exists($dirLocal)) {
        mkdir($dirLocal, 0777, true);
    }

    $miDir = opendir($dirLocal); // Abrir directorio
    $urlFotoProducto = $dirLocal.'/'.$nuevoNameFoto; // Ruta donde se almacena la imagen

    // Muevo la imagen a mi directorio
    if(move_uploaded_file($sourceFoto, $urlFotoProducto)){
        $SqlInsertProducto = ("INSERT INTO table_productos(
            nombreproducto,
            cantidad,
            precio,
            descripcion,
            categoria,
            foto,
            fechaRegistro
        )
        VALUES(
            '".$nombreproducto."',
            '".$cantidad."',
            '".$precio."',
            '".$descripcion."',
            '".$categoria."',
            '".$nuevoNameFoto."',
            '".$fechaRegistro."'
        )");
        $resulInsert = mysqli_query($con, $SqlInsertProducto);
        ///print_r( $SqlInsertProducto);

    }
    closedir($miDir);
    header("Location:index2.php?a=1");

  }else{
    header("Location:index2.php?errorimg=1");
  }
}

// Código para actualizar registro de producto
if($metodoAction == 2){
    $idProducto = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

    $nombreproducto = filter_var($_POST['nombreproducto'], FILTER_SANITIZE_STRING);
    $cantidad = (int) filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);

    $UpdateProducto = ("UPDATE table_productos
        SET nombreproducto = '$nombreproducto',
        cantidad = '$cantidad',
        precio = '$precio', 
        descripcion = '$descripcion', 
        categoria = '$categoria'
        WHERE id = '$idProducto' ");
    $resultadoUpdate = mysqli_query($con, $UpdateProducto);

    // Se verifica si existe la imagen del producto para poder actualizar
    if (!empty($_FILES["foto"]["name"])){
            $filename = $_FILES["foto"]["name"]; // Nombre de la imagen
            $tipo_foto = $_FILES['foto']['type']; // Tipo de archivo
            $sourceFoto = $_FILES["foto"]["tmp_name"]; // URL temporal de la imagen
            $tamano_foto = $_FILES['foto']['size']; // Tamaño de la imagen

        // Se comprueba si la imagen a cargar es valida observando su extensión y tamaño, 100000 = 1 MB
        if (!((strpos($tipo_foto, "PNG") || strpos($tipo_foto, "jpg") && ($tamano_foto < 100000)))) {
            $logitudPass = 8;
            $newNameFoto = substr( md5(microtime()), 1, $logitudPass);
            $explode = explode('.', $filename);
            $extension_foto = array_pop($explode);
            $nuevoNameFoto = $newNameFoto.'.'.$extension_foto;

            // Se verifica si existe el directorio, de lo contrario se crea
            $dirLocal = "ImagenProductos";
            $miDir = opendir($dirLocal); // Abrir directorio
            $urlFotoProducto = $dirLocal.'/'.$nuevoNameFoto; // Ruta donde se almacena la imagen

            // Muevo la imagen a mi directorio
        if(move_uploaded_file($sourceFoto, $urlFotoProducto)){
            $updateFoto = ("UPDATE table_productos SET foto='$nuevoNameFoto' WHERE id='$idProducto' ");
            $resultFoto = mysqli_query($con, $updateFoto);
        }
    }else{
        header("Location:index2.php?errorimg=1");
    }
  }

  header("Location:formEditar.php?update=1&id=$idProducto");
 }

// Eliminar Producto
if($metodoAction == 3){
    $idProducto = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
    $namePhoto = filter_var($_REQUEST['namePhoto'], FILTER_SANITIZE_STRING);

    $SqlDeleteProducto = ("DELETE FROM table_productos WHERE  id='$idProducto'");
    $resultDeleteAlumno = mysqli_query($con, $SqlDeleteProducto);
    
    if($resultDeleteAlumno !=0){
        $fotoProducto = "ImagenProductos/".$namePhoto;
        unlink($fotoProducto);
    }
    
    $msj ="Producto eliminado correctamente.";
    header("Location:index2.php?deletProducto=1&mensaje=".$msj);
}
?>