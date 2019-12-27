<?php /*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  */
?>
<meta charset="utf-8">
<!-- This site is optimized with the Yoast SEO plugin v4.0.2 - https://yoast.com/wordpress/plugins/seo/ -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="modulos/login/style.css" rel="stylesheet">

<link rel='stylesheet' id='menu-css' href='css/menu.css' type='text/css' media='all' />
<!-- ANIMATE CSS -->
<link rel='stylesheet' id='animate-css' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css?ver=3.5.2' type='text/css' media='all' />
<!-- THEME -->
<link rel='stylesheet' id='theme-css' href='css/theme.css' type='text/css' media='all' />



<title> PWA CEAZAMET</title>


<meta name="generator" content="Powered by Slider Revolution 5.2.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

<?php
if (!class_exists('Mobile_Detect')) {
  require 'lib/Mobile_Detect.php';
}


$mobble_detect = new Mobile_Detect();
$mobble_detect->setDetectionType('extended');

// funcion para detectar un movil
function es_movil()
{
  global $mobble_detect;
  return $mobble_detect->isMobile();
}

// funcion para detectar una tablet
function es_tablet()
{
  global $mobble_detect;
  return $mobble_detect->isTablet();
}



?>


<body class="home blog cbp-spmenu-push" onload="">
  <div class="wrapp">
    <header>
      <div class="barra-udec">
        <div id="udec-left"></div>
        <div id="udec-right"></div>
      </div>
      <div class="" id="marcas">
        <div class="container">
          <div class="row">
            <div class="col-md-5"></div>
            <div class="col-xs-11 col-md-5 logos-header" style="">

              <a href="https://www.udec.cl/" title="UDEC" rel="nofollow" target="_blank">
                <img id="udec" class="" src="img/ceaza.png" alt="UDEC">
              </a>

          
            </div>


            <div class="col-xs-12 col-md-1 menu-xs" style="float:right;">
              <div id="home" class="">
                <a id="home-link" href="../index.php" title="Inicio" rel="home">
                  <i class="fa fa-home" aria-hidden="true"></i>
                </a>
              </div>




              <div id="menuToggle" class="toggle" style="z-index:5">
                <div class="i" id="abrir">
                  <a href="#" data-activates="slide-out" onclick="activa()" class="button-collapse" style="float:top; margin-top: 0px; margin-left: 0px; color: white; padding-left: 4px; "><i class="fa fa-bars over"></i></a>
                </div>
              </div>




            </div>
          </div>
        </div><!-- /.container-->
      </div>


      

      <!-- MENU VERTICAL LATERAL -->
      <nav id="slide-out" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right side-nav" style="">
        <ul id="menu-menu-1" class="nav navbar-nav">
          <li>
            <div class="logo-wrapper " style="padding:0">
              <a href="../index.php">
                <img class="img-fluid flex-center" style=" padding: 0; padding-right: 5%; margin:0" src="img/ceaza.png">

              </a>

            </div>
          </li>
          <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-13 active"> <a style="padding-top: 0" title="Inicio" href="index.php">Inicio</a></li>
          <li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a style="padding-top: 0" title="Estadísticas de uso" href="http://www.cdom.cl/estadisticas-de-uso/">Estadísticas de uso</a></li>
          <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a style="padding-top: 0" title="Contacto" href="contacto.php">Cerrar Sesión</a></li>
        </ul>
      </nav>

    </header>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


    <script>
      // SideNav Initialization
      // Show sideNav
      $('.button-collapse').sideNav({
        edge: 'right'
      });
      new WOW().init();

      function activa() {
        document.getElementById('menuToggle').style.zindex = '-2';

      }
    </script>

    <script>
      jQuery(document).ready(function($) {
        $("#link_cr2").on('click', function(event) {
          event.preventDefault();
          window.open('http://www.cr2.cl', '_blank');
        });
        $("#link_oceano").on('click', function(event) {
          event.preventDefault();
          window.open('http://oceanografia.udec.cl/', '_blank');
        });
        $("#link_imar").on('click', function(event) {
          event.preventDefault();
          window.open('http://i-mar.cl/es/inicio/', '_blank');
        });
        $("#link_usach").on('click', function(event) {
          event.preventDefault();
          window.open('http://www.usach.cl/', '_blank');
        });
      });
    </script>