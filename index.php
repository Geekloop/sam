<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: contenido.php');
} elseif (isset($_SESSION['administrador'])) {
	header('Location: contenido.php');
} else {
	header('Location: login.php');
}

?>