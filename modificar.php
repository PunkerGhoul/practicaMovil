<?php
include_once("conexion.php");
//1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexión');
mysqli_set_charset($con, "utf8");
$identif = isset($_GET['cidentificacion']) ? $_GET['cidentificacion'] : '';
$nomb = isset($_GET['cnombre']) ? $_GET['cnombre'] : '';
$ape = isset($_GET['capellido']) ? $_GET['capellido'] : '';
//2. Tomar los campos provenientes de la tabla
$consulta = "UPDATE $bd.datos SET nombre = '$nomb', apellido = '$ape' WHERE identificacion = '$identif'";

if ($con->query($consulta) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_close($con);
