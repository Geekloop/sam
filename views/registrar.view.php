<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet" type="text/css">
	<title>Registrar</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Registrar</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password" placeholder="Repetir contraseña">
			</div>
			<div class="form-group">
				Tipo de cuenta <br>
				<input type="radio" name="rol" class="rol" id="rol1" value="2">
				<label for="rol1">Usuario</label>
				<input type="radio" name="rol" class="rol" id="rol2" value="1">
				<label for="rol2">Administrador</label>
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>

			<?php endif; ?>
		</form>

		<p class="texto-registrate">
			<a href="login.php">Volver</a>
		</p>
	</div>
</body>
</html>