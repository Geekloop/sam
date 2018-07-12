<?php 
$self = $_SERVER['PHP_SELF'];
set_time_limit(300);

$conexion = mysqli_connect("127.0.0.1", "root", "", "sam");
$consulta_ingreso = "INSERT INTO tbl_arduino (id, fecha) VALUES (null, CURRENT_TIME())";

if (isset($_GET['valor'])) {
	// Si hay un valor como GET desde arduino, se insertará dato en BBDD
	if ($_GET['valor'] == 1) {
	mysqli_query($conexion, $consulta_ingreso);
	};
}

$consulta_registros = "SELECT * FROM tbl_arduino";
$array_lista = mysqli_query($conexion, $consulta_registros);

$a = 0; // Contador que se usará para crear un array independiente por cada registro en tabla arduino
foreach ($array_lista as $value_lista) {
	$fecha[$a] = $value_lista['fecha'];
	$a++;
}




require 'views/arduino.view.php';
header("refresh:5; url=$self");
?>