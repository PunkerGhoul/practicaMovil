<?php
include_once("conexion.php");
//1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexión');
mysqli_set_charset($con, "utf8");
$identif = isset($_GET['cidentificacion']) ? $_GET['cidentificacion'] : '';
//2. Tomar los campos provenientes de la tabla
$consulta = "DELETE FROM $bd.datos WHERE identificacion = '$identif'";

if ($con->query($consulta) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

echo json_encode($resultado);
mysqli_close($con);
