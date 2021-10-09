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
  <link rel="stylesheet" href="CSS/style.css">




  <script src="https://kit.fontawesome.com/6b23de7647.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/style.css">
  <!--scripts-->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>
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
    <a href="index.html"><img src="images/logos/logom.png" class="logo"></a>
  </div>
  <a class="campanita" style="margin-top: 10px;" href="#">
    <div  id="noti_count" style="cursor: pointer;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell" style="font-size: 20px;"></i>
    </div>

    <div class="dropdown-menu overflow-h-menu dropdown-menu-right">
      <div class="notification">
      </div>
    </div>
  </a>

  <a class="menu-toggle rounded" style="margin-top: 10px; color:#fff;" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Services">Mi proceso</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Header">Mi banco</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="funciones/motivacion/motivacion.html">Mi motivación</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="funciones/asesoria/asesoria.html">Asesoría</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Testimonials">Regalo del día</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#contactos">Contactos</a>
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


  <!-- Home -->
  <section id="Banner" class="content-section" style=" background-image: url(images/slider/slider2.png);">
    <div class="container content-wrap text-center">
      <h1 class="titulo">BIENVENIDO A TU <span class="titulo_color">ESPACIO</span></h1>
      <h3 style="color: #a7a7a7;">La libertad de ser, pero con fuerza para cambiar</h3>
      <a class="btn btn-primary btn-xl" href="#Portfolio">EMPEZAR</a>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- Fin Home -->

  <!-- PAPS -->
  <section id="Testimonials" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
            <h1><span style="padding-top:2px; padding-bottom: 2px;">PAPS</span></h1>
          </div>
          <div class="element-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms" style="margin-top: 20px;">
            <h1>TE APOYAMOS EN LOS PEORES MOMENTOS</h1>
            <h3 style="margin-bottom: 35px;">Acude a este <span class="main-color">espacio</span> cuando lo <span class="main-color">necesites</span></h3>
          </div>
          <div class="btn-group"></div>
          <button id="sos" type="button" class="open-modal" data-open="modal1" style="color: #fff;">SOS</button>
        </div>
        <div class="modal" id="modal1">
          <div class="modal-dialog">
            <header class="modal-header">
              <a style="font-family:Verdana, Geneva, Tahoma, sans-serif;">CAMINO HACIA LA CALMA - CAMZA </a>
              <button class="close-modal" aria-label="close modal" data-close style="font-size: 20px; color:#fcac8f; padding-left: 15px;">
                ✕
              </button>
            </header>
            <section class="modal-content">
              <audio controls autoplay="true" class="audio">
                <source type="audio/mp3" src="audio/PODCAST_CAMZA.mp3">
              </audio>
            </section>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Fin PAPS -->

  <!-- Instructivo -->
  <section class="content-section text-center" id="Portfolio">
    <div class="container">
      <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
        <h1><span style="padding-top:2px; padding-bottom: 2px;">INSTRUCTIVO</span></h1>
      </div>
      <div class="element-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms" style="margin-top: 20px;">
        <h1>APRENDE Y CONOCE A PROFUNDIDAD</h1>
        <h3 style="margin-bottom: 35px;">Aquí <span class="main-color">encontrarás </span>más información acerca de tus <span class="main-color">espacios</span></h3>
      </div>
      <div class="portfolio-wrapper clearfix">
        <a class="each-portfolio" data-fancybox="cerrar" href="images/p-two.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-two.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">MI PROGRESO</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-three.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">MI BANCO</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-four.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">MI MOTIVACIÓN</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-five.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-five.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">ASESORÍA</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-six.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-six.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">REGALO DEL DÍA</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-three.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">FORO</h5>
              <p class="p-desc">¿En qué consiste este espacio?</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- Fin instructivo -->

  <!-- Testimonios -->
  <section id="Testimonials" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">
            <h1><span style="padding-top:2px; padding-bottom: 2px;">TESTIMONIOS</span></h1>
          </div>
          <div class="element-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms" style="margin-top: 20px;">
            <h1>HISTORIAS QUE INSPIRAN</h1>
            <h3 style="margin-bottom: 35px;">Estas son personas <span class="main-color">valientes</span> como <span class="main-color">tú, </span>ellos pudieron, tú<span class="main-color"> también</span></h3>
          </div>
          <div id="customers-testimonials" class="owl-carousel">
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/sarah.jpg" alt="">
                <p>"Antes fumaba Cannabis de vez en cuando, cada que decidía consumirla por parcharme con amigos o por jugar, creía que tenia el control de ello pero cuando menos lo pensé me convertí en su esclavo, ya no concibo la vida sin esa droga, es más, no siento vida si no es con ella. Y si alguien esta leyendo esto no normalicen las sustancias psicoactivas porque te equivocas al pensar que no son peligrosas y que se pueden controlar"</p>
              </div>
              <div class="testimonial-name">Anónimo</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/tangelia.jpg" alt="">
                <p>"Era un adicto a la Cocaína, sentía que no podía vivir sin aquel polvo blanco daña vidas, destroza sueños e incluso que te consume a ti mismo. Día a día me despertada con la intención de no volverla a consumirla, sin embargo, estaba tan enganchado que pensaba que nunca podría dejarla o sino moriría. Pero comence a construir un nuevo camino y destino para mi vida, me aleje de las adicciones y para superarme a mi mismo" </p>
              </div>
              <div class="testimonial-name">Anónimo</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/john-doe.jpg" alt="">
                <p>"Desde hace un tiempo tengo problemas conmigo misma y a partir de tantas inseguridades llegue al Cannabis como salida a los pensamientos que me atormentaban, además me deje influenciar por la aceptación de mis amigos, y aunque ellos pensaban que lo hacía solo por curiosidad, de fondo había algo más, estaban mis miedos, mis complejos y la bobada de hacerme la valiente, queriendo ocultar mis verdaderos problemas" </p>
              </div>
              <div class="testimonial-name">Anónimo</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/amy.jpg" alt="">
                <p>"Me dejé influenciar por los que llamaba en ese entonces “mis hermanos del alma”, los mismos que se aprovecharon de la situación desagradable y vulnerable por la cual estaba pasando y me ofrecieron Marihuana para saciar mis penas. Hoy en día soy adicto a las drogas que son consideradas las más fuertes. Me siento más solo y vacío que cuando creía estarlo y si pudiera pedir un deseo, pediría nunca a ver entrado a ese circulo vicioso"</p>
              </div>
              <div class="testimonial-name">Anónimo</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/daniel.jpg" alt="">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
              </div>
              <div class="testimonial-name">Anónimo</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin testimonios -->

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
        <p><span>&#169; Copyright 2017 Xlight Template by</span> <a href="https://www.andsolutions.it"> Andsolutions</a></p>
      </div>
    </div>
  </div>
  <!-- Fin Footer -->

  <!-- Scroll to top -->
  <a href="#" class="foro"><i class="fa fa-comments"></i></a>
  <!-- Fin Scroll to top  -->


  <!-- Bootstrap core JavaScript
    ================================================== -->



  <script src="audio/funciones.js"></script>
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

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('.notification').load('Ajax/Notification.php');
      $('.counter').text('0').hide();

      var counter = 0;

      $('#form-submit').on('submit', function(event) {
        event.preventDefault();

        var subject = $('#subject').val().trim();
        var comment = $('#comment').val().trim();

        $('#sub-error').text('');
        $('#com-error').text('');

        if (subject != '' && comment != '') {

          $.ajax({
            type: "POST",
            url: "Ajax/Ins_notification.php",
            data: {
              'subject': subject,
              'comment': comment
            },
            success: function(response) {
              var status = JSON.parse(response);
              if (status.status == 101) {
                counter++;
                $('.counter').text(counter).show();
                $('.notification').load('Ajax/Notification.php');
                $("#form-submit").trigger("reset");
                console.log(status.msg);
              } else {
                console.log(status.msg);
              }
            }
          });

        } else {

          if (subject == '') {
            $('#sub-error').text("Por favor ingresa un titulo");
          }
          if (comment == '') {
            $('#com-error').text("Por favor ingresa una descripción");
          }
        }

      });

      $('#noti_count').on('click', function() {
        counter = 0;
        $('.counter').text('0').hide();
      });

    });
  </script>

</body>

</html>