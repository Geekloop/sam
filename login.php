<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if (isset($_SESSION['administrador'])) {
	header('Location: index.php');
}

$errores = '';
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	$conexion = mysqli_connect("127.0.0.1", "root", "", "sam"); // Conexión a base de datos


	$consulta_usuario_registrado = "SELECT * FROM tbl_usuarios WHERE user = '$usuario' AND password = '$password'";
	$array_ingreso_usuarios = mysqli_query($conexion, $consulta_usuario_registrado);


	foreach ($array_ingreso_usuarios as $value_ingreso) {
		$rol = $value_ingreso['rol'];
	}

	$resultado = mysqli_num_rows($array_ingreso_usuarios);

	if ($resultado == 1) {
		if ($rol == 1) {
			$_SESSION['administrador'] = $usuario;
			header('Location: index.php');
		} else {
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		}
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';

?>