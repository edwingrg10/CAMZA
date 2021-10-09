<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registrarse-CAMZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="registrar.css">

    <link rel="shortcut icon" href="../../images/logos/nav.png">	

  </head>
  <body>
<!-- multistep form -->
<div>
<form id="msform"  action="../../php/registrouser.php" method="POST">

	<fieldset>
		<h2 class="fs-title">Registrarse</h2>
		<h3 class="fs-titlesub">Ingresa tus datos personales</h3>
		<input id="nombre" type="text" name="nombre" placeholder="Nombre" />
		<input id="apellidos" type="text" name="apellido" placeholder="Apellido" />
    <div class="genero"><p>Género</p></div>
    <div class="cajag"> <div class="caja1g">
    <input id="ayudarc" type="radio" name="genero" value="Femenino"/></div><div class="texto1g">F</div>
    <div class="caja2g"><input id="ayudarc" type="radio" name="genero" value="Masculino"/></div><div class="texto2g">M</p></div>
    <div class="caja3g"><input id="ayudarc" type="radio" name="genero" value="Otro"/></div><div class="texto3g">Otro</p></div></div>
		<input id="nacimiento" type="text" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
		<input id="email" type="text" name="email" placeholder="Email" />
    <input id="usuario" type="text" name="username" placeholder="Usuario" />     
		<input id = "pass" type="password" name="password" placeholder="Contraseña" />
		<input id = "pass-check" type="password" name="cpass" placeholder="Confirmar Contraseña" />
    <input type="submit"  class="submit action-button" value="Registar" /></form>
		<div class="cajalink">
    <p>¿Ya tienes una cuenta? <a href="../login/login.php">Ingresa.</a></p>
    </div> 
	</fieldset>
</form>
<?php
		if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['genero']) && isset($_POST['fecha_nacimiento']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
			require_once "../../php/conexion.php";
			require_once "../../php/registrouser.php";
		}
	?>
</div>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>


<script src="registrar.js"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>


</body>

</html>