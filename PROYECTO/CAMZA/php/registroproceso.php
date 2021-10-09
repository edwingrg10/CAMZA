<?php
 $pdo = new PDO('mysql:host=localhost;dbname=camza','root','');

	$droga=$_POST['droga'];
	$dosis=$_POST['dosis'];
	$precio=$_POST['precio'];
	$fecha_consumo=$_POST['fecha_consumo'];
	$causa=$_POST['causa'];
	$razon=$_POST['razon'];
	$persona=$_POST['persona'];
	$ayuda=$_POST['ayuda'];
    $payuda=$_POST['payuda'];
    $etapa=$_POST['etapa'];
    $sueño=$_POST['sueño'];
    $inspiracion=$_POST['inspiracion'];
    $cambio=$_POST['cambio'];
	
	$consulta=$pdo->prepare("INSERT INTO proceso(proceso_tbl_droga,proceso_tbl_dosis,proceso_tbl_precio,proceso_tbl_fecha_consumo,proceso_tbl_causa,proceso_tbl_razon,proceso_tbl_persona,proceso_tbl_ayuda,proceso_tbl_payuda,proceso_tbl_etapa,proceso_tbl_sueño,proceso_tbl_inspiracion,proceso_tbl_cambio) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$consulta->bindParam(1,$droga);
	$consulta->bindParam(2,$dosis);
	$consulta->bindParam(3,$precio);
	$consulta->bindParam(4,$fecha_consumo);
	$consulta->bindParam(5,$causa);
	$consulta->bindParam(6,$razon);
	$consulta->bindParam(7,$persona);
	$consulta->bindParam(8,$ayuda);
	$consulta->bindParam(9,$payuda);
	$consulta->bindParam(10,$etapa);
	$consulta->bindParam(11,$sueño);
	$consulta->bindParam(12,$inspiracion);
	$consulta->bindParam(13,$cambio);


	if($consulta->execute()){
		echo '<script type="text/javascript">
            alert("TU PROCESO SE HA REGISTRADO CON ÉXITO");
            window.location.href="../formularios/login/login.php";
            </script>';
    
	}else{
		echo '<script type="text/javascript">
            alert("OCURRIO UN ERROR EN TU REGISTRO");
            </script>';
    
	}
?>