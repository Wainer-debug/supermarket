<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "crud_php";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se logró establecer la conexión con el servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error al conectar con la base de datos");
?>