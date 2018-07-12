<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" type="text/css">
	<title>Contenido</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Bienvenido a SAM</h1>
		<?php if ($rol == 1): ?>
			<a href="registrar.php">Registrar usuarios</a><br>
		<?php endif; ?>
		<a href="http://192.168.0.100">DVR</a><br>
		<hr class="border">
		<div class="contenido">
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate repellat saepe voluptas cupiditate deserunt necessitatibus quod, magni? Dignissimos nihil aliquam hic illo, fugit totam debitis ex consequuntur. Quia, odio, consectetur?</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, dolorem. Debitis, obcaecati, et consectetur veritatis, voluptates inventore sint aliquam nam architecto voluptatibus eius. Quia numquam ipsam et mollitia iure deleniti!</p>
			</article>
		</div>
		<a href="cerrar.php">Cerrar Sesión</a>
	</div>
</body>
</html>
