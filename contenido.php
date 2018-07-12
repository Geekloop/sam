<?php session_start();


if (isset($_SESSION['usuario'])) {
	$rol = 2;
} elseif (isset($_SESSION['administrador'])) {
	$rol = 1;
} else {
	header('Location: index.php');
}


require 'views/contenido.view.php';

?>