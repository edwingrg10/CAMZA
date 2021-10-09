<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/logos/nav.png">
  <title>CAMZA APP</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">

  <link href="../CAMZA/css/theme.css" rel="stylesheet">
  <link href="../CAMZA/css/blue.css" rel="stylesheet" class="colors">

  <!--scripts-->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>

</head>

<body id="page-top">

<div class="logo">
    <a href="index.html"><img src="images/logos/logom.png" class="logo" ></a>
  </div>
  <a class="menu-toggle rounded" style="margin-top: 10px; color:#fff;" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="index.html">Inicio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="www.google.com">Asesoría</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Testimonials">Gráficas</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Testimonials">Casos reportados</a>
      </li>            
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Header">Mi desempeño</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#contactos">Contactos</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="notificaciones.php">Notificaciones</a>
      </li>
      <div class="menuimp">
      <li class="sidebar-nav-item-2">
        <a class="smooth-scroll" href="#perfil">Perfil
        <i class="fa fa-user-circle-o"></i></a>      
      </li>
      <li class="sidebar-nav-item-2">
        <a class="smooth-scroll" href="#cerrarsesion">Cerrar Sesión
        <i class="fa fa-sign-out"></i></a>
      </li>
    </div>
    </ul>
  </nav>
    <!-- Preloader --> 
    <form id="form-submit" method="POST" class="form login">

            <header class="login__header">
            <img class="icono" src="../CAMZA//images/logos/nav.png" width="100px">
            <h3 class="login__title">Crear notificación</h3>
            </header>

            <div class="login__body">

            
            <div class="form-group">
                        <label for="subject"><b>Titulo *</b></label>
                        <input type="text" name="subject" class="form-control" id="subject" aria-describedby="emailHelp">
                        <small class="form-text text-error" id="sub-error"></small>
            </div>

            
            <div class="form-group">
                        <label for="comment"><b>Descripción *</b></label>
                        <textarea name="comment" class="form-control" id="comment" ></textarea>
                        <small class="form-text text-error" id="com-error"></small>
                    </div>
            </div>

            <footer class="login__footer">
            <button type="submit" class="btn btn-danger">Enviar</button>
            </footer> 
            <footer class="login__footer2">
            </footer>       
</form>
  <!-- Fin instructivo -->
  
<!-- Footer -->
<!-- Redes sociales -->
<div class="bottom-footer" id="contactos">
	<div class="container"> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<ul class="bottom-social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-envelope"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
			</ul>
		</div>
		<!-- Fin Redes sociales -->
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><span>&#169; Copyright 2021 CAMZA</span>  <a href=""> </a></p>
		</div>		  
	</div>
</div>
<!-- Fin Footer -->	

<!-- Scroll to top -->
<a href="#" class="foro"><i class="fa fa-comments"></i></a>
<!-- Fin Scroll to top  -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>	
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>

<script type="text/javascript">

    $(document).ready(function (){

        $('.notification').load('Ajax/Notification.php');
        $('.counter').text('0').hide();

        var counter = 0;

        $('#form-submit').on('submit', function(event){
            event.preventDefault();
            
            var subject = $('#subject').val().trim();
            var comment = $('#comment').val().trim();

            $('#sub-error').text('');
            $('#com-error').text('');

            if(subject != '' && comment != ''){
                
                $.ajax({
                    type: "POST",
                    url: "Ajax/Ins_notification.php",
                    data: { 'subject' : subject, 'comment' : comment },
                    success: function (response) {
                        var status = JSON.parse(response);
                        if(status.status == 101){
                            counter++;
                            $('.counter').text(counter).show();
                            $('.notification').load('Ajax/Notification.php');
                            $("#form-submit").trigger("reset");
                            console.log(status.msg);
                        }
                        else{
                           console.log(status.msg);
                        }
                    }
                });

            }
            else{
            
                if(subject == ''){
                    $('#sub-error').text("Por favor ingresa un titulo");
                }
                if(comment == ''){
                    $('#com-error').text("Por favor ingresa una descripción");
                }
            }

        });

        $('#noti_count').on('click',function (){
            counter = 0;
            $('.counter').text('0').hide();
        });

    });

</script>
  
</body>

</html>