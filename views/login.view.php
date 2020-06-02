<?php require 'header.php'; ?>

<div class="contenedor">
	<h1 class="titulo">Inicio de sesión</h1>
	<hr class="border">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
		<div class="form-group">
			<i class="icono izquierda2 fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
		</div>
		<div class="form-group">
			<i class="icono izquierda2 fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
			<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
		<?php if (!empty($errores)): ?>
			<div class="error">
				<ul>
					<?php echo $errores; ?>
				</ul>
			</div>
		<?php endif ?>
	</form>
	<p class="texto-registrate" style="color: #000000">
		¿Aún no tienes cuenta?
		<a href="registro.php">Registrate</a>
	</p>
</div>

<?php require 'footer.php'; ?>
