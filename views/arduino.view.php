<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" type="text/css">
	<title>SAM Control de Acceso</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">SAM Activado</h1>
		<a href="http://192.168.0.100">DVR</a><br>
		<hr class="border">
		<div class="contenido">
			<article>
				<p>Sistema de Alerta SAM activado</p>

				<p>Últimas alertas</p>
				<table width="100%">
					<?php
					$i = 0;
					$c = 1;
					while ($i < count($fecha)) {
						echo '<tr>
								<td style="color:black">' . $c . '</td>
								<td style="color:black">' . $fecha[$i] . '</td>
						</tr>';
						
						$i++;
						$c++;
					}
					?>
				</table>
			</article>
		</div>
		<a href="cerrar.php">Cerrar Sesión</a>
	</div>
</body>
</html>