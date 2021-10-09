<?php
 $pdo = new PDO('mysql:host=localhost;dbname=camza','root','');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$genero=$_POST['genero'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$email=$_POST['email'];
    $username=$_POST['username'];
	$password=md5($_POST['password']);

	$consulta=$pdo->prepare("INSERT INTO usuarios(usuarios_tbl_nombre,usuarios_tbl_apellido,usuarios_tbl_genero,usuarios_tbl_fecha_nacimiento,usuarios_tbl_email,usuarios_tbl_username,usuarios_tbl_password) VALUES (?,?,?,?,?,?,?)");

	$consulta->bindParam(1,$nombre);
	$consulta->bindParam(2,$apellido);
	$consulta->bindParam(3,$genero);
	$consulta->bindParam(4,$fecha_nacimiento);
	$consulta->bindParam(5,$email);
	$consulta->bindParam(6,$username);
	$consulta->bindParam(7,$password);

	if($consulta->execute()){
		echo '<script type="text/javascript">
            alert("TE HAS REGISTRADO CON ÉXITO");
            window.location.href="../formularios/login/login.php";
            </script>';
    
	}else{
		echo '<script type="text/javascript">
            alert("OCURRIO UN ERROR AL REGISTRARTE");
            </script>';
    
	}
?>