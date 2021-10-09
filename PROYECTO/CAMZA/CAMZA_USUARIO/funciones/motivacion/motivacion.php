<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../images/logos/nav.png">
  <title>Motivación-CAMZA</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../../styles/styles.css" rel="stylesheet" type="text/css">
  <link href="../../styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">

  <link href="../../../css/theme.css" rel="stylesheet">
  <link href="../../../css/responsive.css" rel="stylesheet">
  <link href="../../../css/blue.css" rel="stylesheet" class="colors">

  <!--scripts-->
  <script type="text/javascript" src="../../scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../../scripts/all-plugins.js"></script>
  <script type="text/javascript" src="../../scripts/plugins-activate.js"></script>
</head>

<body id="page-top">

    <!-- Preloader --> 
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<!-- Fin Preloader -->

  <!-- Menú -->
  <div class="logo">
    <a href="index.html"><img src="../../images/logos/logom.png" class="logo" ></a>
  </div>
  <a class="campanita" id="button" style="margin-top: 10px;" href="../CAMZA/index.html">
    <i class="fa fa-bell-o" id="icono" style="color: #fff;"></i>
  </a>
  <a class="menu-toggle rounded" id="hide" style="margin-top: 10px; color:#fff;" href="#">
    <i class="fa fa-bars"></i>
    <script>
      $(function(){
        $('#hide').click(function(){
          $('#button').toggle();
        });
      });
      </script>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>	  
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="../../index.html">Inicio</a>
      </li> 
	  <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Services">Mi proceso</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="../banco/banco.html">Mi banco</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="motivacion.html">Mi motivación</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="../asesoria/asesoria.html">Asesoría</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Testimonials">Regalo del día</a>
      </li>
      <div class="menuimp">
      <li class="sidebar-nav-item-2">
        <a class="smooth-scroll" href="#perfil">Perfil
        <i class="fa fa-user-circle-o"></i></a>      
      </li>
      <li class="sidebar-nav-item-2">
        <a class="smooth-scroll" href="../../../php/logout.php">Cerrar Sesión
        <i class="fa fa-sign-out"></i></a>
      </li>
    </div>
    </ul>
  </nav>

  <section id="Services" class="content-section text-center">
    <div class="container">
        <div class="container" style="margin-bottom: 40px; margin-top: 30px;">
            <div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
                <h1><span>MI MOTIVACIÓN</span></h1>							
            </div>				
            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms" style="color: #666666; font-size: 30px;">VISUALIZA TUS SUEÑOS Y ANHELOS</h1>
            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms" style="color: #666666; font-size: 20px;"><span class="main-color">Lucha </span> Por Lo Que Plasmaste En Este <span class="main-color">Espacio, </span>No Existe Nada Más <span class="main-color">Valioso </span>Que Lo Que Anhela Tu <span class="main-color">Corazón</span></h3>	
        </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon yellow">
              <div class="front-content">
                <i class="fa fa-users" aria-hidden="true"></i>
                <h3>La persona que te inspira, cree en ti, ahora creételo tú</h3>
              </div>
            </div>
            <div class="service-content" style="display: grid;">
              <i class="fa fa-heart" aria-hidden="true" style="color: #fff; font-size: 25px;"></i>
             <tbody> <?php
             include_once "../../../php/conexion.php";
              $consulta=$pdo->prepare("SELECT * FROM proceso");
              $consulta->execute();
              if($consulta->rowCount()>=1){
                while($fila=$consulta->fetch()){
                  echo "<tr>
                      <td>".$fila['proceso_tbl_inspiracion']."</td>
                      </tr>";
		          }
	            }else{
		              echo "<tr>
		                	<td colspan='4'>No hay datos</td>
		                  </tr>";
	            }
                      ?>
                      </tbody>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon orange">
              <div class="front-content">
                <i class="fa fa-trophy"></i>
                <h3>Tu inspiración para el cambio, persiste en tu corazón</h3>
              </div>
            </div>
            <div class="service-content" style="display: grid;">
              <i class="fa fa-heart" aria-hidden="true" style="color: #fff; font-size: 25px;"></i>
              <tbody> <?php
             include_once "../../../php/conexion.php";
              $consulta=$pdo->prepare("SELECT * FROM proceso");
              $consulta->execute();
              if($consulta->rowCount()>=1){
                while($fila=$consulta->fetch()){
                  echo "<tr>
                      <td>".$fila['proceso_tbl_sueño']."</td>
                      </tr>";
	           	}
	            }else{
		              echo "<tr>
			                <td colspan='4'>No hay datos</td>
		                  </tr>";
             	}
                      ?>
                      </tbody>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box ">
            <div class="service-icon red">
              <div class="front-content">
                <i class="fa fa-rocket" aria-hidden="true"></i>
                <h3>Tu sueño al salir del consumo, te está esperando</h3>
              </div>
            </div>
            <div class="service-content" style="display: grid;">
              <i class="fa fa-heart" aria-hidden="true" style="color: #fff; font-size: 25px;"></i>
              <tbody> <?php
             include_once "../../../php/conexion.php";
              $consulta=$pdo->prepare("SELECT * FROM proceso");
              $consulta->execute();
              if($consulta->rowCount()>=1){
                while($fila=$consulta->fetch()){
                  echo "<tr>
                      <td>".$fila['proceso_tbl_cambio']."</td>
                      </tr>";
              }
            	}else{
		              echo "<tr>
			                <td colspan='4'>No hay datos</td>
		                  </tr>";
             	}
                      ?>
                      </tbody>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon grey">
              <div class="front-content">
                <i class="fa fa-flag"></i>
                <h3>Tenemos un sueño para ti y lo lograrémos juntos</h3>
              </div>
            </div>
            <div class="service-content" style="display: grid;">
              <i class="fa fa-heart" aria-hidden="true" style="color: #fff; font-size: 25px;"></i>
              <p>Queremos verte triunfar, pero sobre todo que seas feliz al lado de las personas que te aman, entendemos por lo que estas pasando, pero tú puedes, eres capaz de salir a demostrarle al mundo como brillar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

<!-- Scroll to top -->
<a href="#" class="foro"><i class="fa fa-comments"></i></a>
<!-- Fin Scroll to top  -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/retina.min.js"></script>
	<script src="../../jquery.easing.min.js"></script>
	<script src="../../js/wow.min.js"></script>	
	<script src="../../js/waypoints.min.js"></script>	
	<script src="../../js/jquery.countTo.js"></script>
	<script src="../../js/jquery.mixitup.min.js"></script>
	<script src="../../js/jquery.prettyPhoto.js"></script>	
	<script src="../../js/jquery.knob.min.js"></script>	
	<script src="../../js/jquery.validate.min.js"></script>
	<script src="../../js/custom.js"></script>
  
</body>

</html>