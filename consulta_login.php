<?php include_once("conexion.php"); //1. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");
//2. Tomar los campos provenientes de la tabla
$usu = $_GET["cusuario"];
$clav = $_GET["cclave"];
$consulta = "SELECT * FROM $bd.datos where nombre ='$usu' AND identificacion ='$clav'";
$resultado = mysqli_query($con, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
    $resultado1[] = $fila;
}
echo json_encode($resultado1, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
