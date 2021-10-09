<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Iniciar Sesión-CAMZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">

    <link rel="shortcut icon" href="../../images/logos/nav.png">	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
    <!-- <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">         -->
        
        <!-- script -->
        <!-- <script type="text/javascrip" src="funcion.js"></script> -->

  </head>
  <body class="align">

  <div class="grid">

    <form action="" method="POST" class="form login">

      <header class="login__header">
        <img class="icono" src="../../images/logos/nav.png">
        <h3 class="login__title">Iniciar Sesión</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="text"  name="username" placeholder="Usuario" data-validate = "Usuario incorrecto" >
        </div>

        <div class="form__field">
          <input type="password"  name="password" placeholder="Contraseña" data-validate = "Contraseña incorrecta" >
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" ></input>
      </footer>       
      

    </form>
    <?php
		if(isset($_POST['username'])&&isset($_POST['password'])){
			require_once "../../php/conexion.php";
			require_once "../../php/logear.php";
		}
	?>
  </div>
  <div class="cajalink">
  <p>¿Aún no tienes una cuenta? <a href="../registrar/registrar.php" class="link">Regístrate.</a></p>
 </div>

</body>
</html>