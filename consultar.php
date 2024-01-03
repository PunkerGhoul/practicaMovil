<?php
include_once("conexion.php");
//1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexión');
mysqli_set_charset($con, "utf8");
$identif = isset($_GET['cidentificacion']) ? $_GET['cidentificacion'] : '';
//2. Tomar los campos provenientes de la tabla
$consulta = "SELECT * FROM $bd.datos WHERE identificacion = '$identif'";
$resultado = mysqli_query($con, $consulta);

$resultado1 = array();
while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
    $resultado1[] = $fila;
}

echo json_encode($resultado1, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
