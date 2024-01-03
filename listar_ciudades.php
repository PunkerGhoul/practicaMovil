<?php include_once("conexion.php");
//1. Crear conexión a la Base de Datos
$bd_ciudades = $bd . "2";
$con = mysqli_connect($host, $usuario, $clave, $bd_ciudades) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$filter = $_GET['filter'] ?? "";

//2. Tomar los campos provenientes de la tabla
$consulta = "SELECT * FROM $bd_ciudades.ciudades";
if ($filter == "nombre") {
    $consulta = "SELECT nombre FROM $bd_ciudades.ciudades";
}
$resultado = mysqli_query($con, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    $resultado1[] = $fila;
}
echo json_encode($resultado1, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
