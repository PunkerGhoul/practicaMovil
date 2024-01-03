<?php
//1. Invocar conexión
include_once("conexion.php");
//2. Crear conexión a la Base de Datos
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");
//3. Tomar los datos provenientes de los campos del Formulario
$identif = isset($_GET['cidentificacion']) ? $_GET['cidentificacion'] : '';
$nomb = isset($_GET['cnombre']) ? $_GET['cnombre'] : '';
$ape = isset($_GET['capellido']) ? $_GET['capellido'] : '';
//4. Insertar los datos en la tabla de la Base de Datos 
$inserta = "INSERT INTO $bd.datos (identificacion, nombre, apellido) VALUES 
('$identif','$nomb','$ape');";
$resultado = mysqli_query($con, $inserta);
echo json_encode($resultado);
//5. Cerrar la conexion 
mysqli_close($con);
