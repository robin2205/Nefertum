<?php
session_start();
include 'acciones/conexion.php';
if(isset($_SESSION['usuario'])){
	echo '<script> window.location="menuAdmin.php";</script>';}?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Nefertum</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Atma" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/animate.css" charset="utf-8">
    <link rel="icon" href="Imagenes/logo2.png" type="image/x-icon">
		<script>
    function validar_texto(e){
    	tecla=(document.all)?e.keyCode:e.which;
    	if (tecla==8) return true;
    	patron=/[A-Za-z\sáéíóú]/;
    	tecla_final=String.fromCharCode(tecla);
    	return patron.test(tecla_final);}
		function validar_textonumero(e){
    	tecla=(document.all)?e.keyCode:e.which;
    	if (tecla==8) return true;
    	patron=/[A-Za-z0-9\sáéíóú]/;
    	tecla_final=String.fromCharCode(tecla);
    	return patron.test(tecla_final);}
    </script>
  </head>
  <body>
		<img id="background" src="Imagenes/fondo.jpg">
		<div class="container">
			<form action="acciones/iniciosesion.php" method="post">
				<h1 id="titulologin">Inicio Sesión&nbsp;<img width="70" src="Imagenes/logo2.png"></h1>
				<hr class="border">
				<div class="form-group">
					<label class="hidden-xs control-label" id="lbllogin">Usuario</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="usuario" id="usuario" class="form-control" maxlength="10" required placeholder="Ingrese el Usuario">
					</div>
				</div>
				<div class="form-group">
					<label class="hidden-xs control-label" id="lbllogin">Contraseña</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="contrasena" id="contrasena" class="form-control" maxlength="10" required placeholder="Ingrese la Contraseña">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="ingresar" id="ingresar" class="btn btn-primary" value="Ingresar">
				</div>
			</form>
			<footer class="footer">
        <p>&copy; 2016 Robinson, Inc.</p>
      </footer>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
