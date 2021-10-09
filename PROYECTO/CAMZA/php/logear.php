<?php
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$consulta=$pdo->prepare("SELECT * FROM usuarios WHERE usuarios_tbl_username=:username AND usuarios_tbl_password=:password");
	$consulta->bindParam(':username',$username);
	$consulta->bindParam(':password',$password);
	$consulta->execute();
	if($consulta->rowCount()>=1){
		session_start();
		$fila=$consulta->fetch();
		$_SESSION['username']=$fila['usuarios_tbl_username'];
		echo '<script type="text/javascript">
        alert("NOS ALEGRA TENERTE DE NUEVO");
        window.location.href="../../CAMZA_USUARIO/index.html";
        </script>';
	}else{
		echo '<script type="text/javascript">
        alert("DATOS INCORRECTOS, INTÉNTALO DE NUEVO");
        window.location.href="login.php";
        </script>';
	}