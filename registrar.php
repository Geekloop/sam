<?php session_start();

if (isset($_SESSION ['usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$rol = $_POST['rol'];

	$errores = '';
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor ingresa todos los datos</li>';
	} else {
		$conexion = mysqli_connect("127.0.0.1", "root", "", "sam");
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);



		// Las siguientes líneas tienen la función de validar si hay un usuario registrado
		//--------------------------------------------------------------------------------
		$consulta_usuarios_registrados = "SELECT DISTINCT user FROM tbl_usuarios WHERE user = '$usuario'";
		$array_usuarios_registrados = mysqli_query($conexion, $consulta_usuarios_registrados);
		$resultado = mysqli_num_rows($array_usuarios_registrados);


		if ($resultado == 1) {
			$errores .= '<li>El usuario ya existe</li>';
		}

		//--------------------------------------------------------------------------------

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no coinciden</li>';
		}
	}

	if ($errores == '') {
		
		$consulta_registro_usuarios = "INSERT INTO tbl_usuarios (id, user, password, rol) VALUES (null,'$usuario','$password', '$rol')";
		mysqli_query($conexion, $consulta_registro_usuarios);
		header('Location: login.php');
	}
}

require 'views/registrar.view.php';

?>