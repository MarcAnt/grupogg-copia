
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php 
        
		#MANTENER LA RUTA FIJA DEL PROYECTO
        $url = Ruta::mdlRuta();


        #Establecer el titulo para cada página
        $ruta = null; 
        $rutas = array(); 
        if(isset($_GET['ruta'])) {

            $rutas = explode('/', $_GET['ruta']); 
            $ruta = $rutas[0];
 

            if($rutas[0] == 'novedades') {
                $ruta = 'Novedades'; 
            }elseif($rutas[0] == 'medicalclin') {
                $ruta = 'Medicalclin';
            }elseif($rutas[0] == 'acg') {
                $ruta = 'acg';
            }elseif($rutas[0] == 'gc') {
                $ruta = 'gc';
            }elseif($rutas[0] == 'contacto') {
                $ruta = 'Contacto';
            }elseif($rutas[0] == 'Suministros-Industriales') {
                $ruta = 'Suministros-Industriales';

            }elseif($rutas[0] == 'Informatica') {
                $ruta = 'Informatica';

            }elseif($rutas[0] == 'Automatizacion') {
                $ruta = 'Automatizacion';
            
            }elseif($rutas[0] == 'Construccion') {
                $ruta = 'Construccion';
            
            }elseif($rutas[0] == 'Electricidad') {
                $ruta = 'Electricidad';
            
            }elseif($rutas[0] == 'Respuestos-Livianos') {
                $ruta = 'Respuestos-Livianos';
            
            }elseif($rutas[0] == 'Respuestos-Pesados') {
                $ruta = 'Respuestos-Pesados';
            
            }elseif($rutas[0] == 'Suministros-Agricolas') {
                $ruta = 'Suministros-Agricolas';
            
            }elseif($rutas[0] == 'Suministros-Medicos') {
                $ruta = 'Suministros-Medicos';
            }else {
                $ruta = 'Inicio';
            }

        }else {
            $ruta = 'Inicio'; 
        }
    
    ?>

    <title>Grupo GG - <?php echo $ruta; ?> </title>

    <!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="<?php echo $ruta; ?>">

    <meta name="description" content="Grupo GG es una empresa de multiservicios a nivel nacional que ofrece cobertura desde Tecnología, automotriz, construcción y suplementos médicos, ubicado en Maracay, Aragua">

    <meta name="keyword" content="Tecnología Mecánica Industrial Automotriz Empresas Suplementos Médicos Construcción Electricidad">


    <!--=====================================
    Marcado de Open Graph FACEBOOK
    ======================================-->

    <meta property="og:title"   content="<?php echo $ruta; ?>">
    <meta property="og:url" content="<?php echo $url.$rutas[0];?>">
    <meta property="og:description" content="Grupo GG es una empresa de multiservicios a nivel nacional que ofrece cobertura desde Tecnología, automotriz, construcción y suplementos médicos, ubicado en Maracay, Aragua">
    <meta property="og:image"  content="<?php echo $url?>vistas/img/grupogg-logo.png">
    <meta property="og:type"  content="website">	
    <meta property="og:site_name" content="<?php echo $url?>vistas/img/grupogg-logo.png">
    <meta property="og:locale" content="es_VE">

    <!--=====================================
    Marcado para DATOS ESTRUCTURADOS GOOGLE
    ======================================-->

    <meta itemprop="name" content="<?php echo $ruta; ?>">
    <meta itemprop="url" content="<?php echo $url.$rutas[0];?>">
    <meta itemprop="description" content="Grupo GG es una empresa de multiservicios a nivel nacional que ofrece cobertura desde Tecnología, automotriz, construcción y suplementos médicos, ubicado en Maracay, Aragua">
    <meta itemprop="image" content="<?php echo $url?>vistas/img/grupogg-logo.png">
    <meta name="google-site-verification" content="6-mlGjtdhNQuKAFbeVM1u1yfohPmQl2eMoqme_TLIq4" />
    <!--=====================================
    Marcado de TWITTER
    ======================================-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $ruta; ?>">
    <meta name="twitter:url" content="<?php echo $url.$rutas[0];?>">
    <meta name="twitter:description" content="Grupo GG es una empresa de multiservicios a nivel nacional que ofrece cobertura desde Tecnología, automotriz, construcción y suplementos médicos, ubicado en Maracay, Aragua">
    <meta name="twitter:image" content="<?php echo $url?>vistas/img/grupogg-logo.png">
    <meta name="twitter:site" content="@grupogg">


    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/custom.css">
    <link rel="shortcut icon" href="<?php #echo $url; ?>vistas/img/icon-gg.png" type="image/png">

    <script src="<?php echo $url; ?>vistas/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light header-nav w-100">
       
        <!-- Just an image -->
        <nav class="navbar navbar-light ">
            <a class="navbar-brand" href="inicio">
                <img src="vistas/img/grupogg-logo.png" width="150" height="30" alt="">
            </a>
        </nav>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-center <?php echo $ruta == 'Inicio' ? 'color-gg-verde':''; ?>" href="inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item active">
              <a class="nav-link text-center <?php #echo $ruta == 'Nosotros' ? 'color-gg-verde':''; ?>" href="nosotros">Nosotros<span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <?php 
                    if($ruta == 'Medicalclin' || $ruta == 'Novedades' || $ruta == 'acg' || $ruta == 'gc') {
                        
                        echo '<a class="nav-link dropdown-toggle text-center color-gg-verde" href="empresas" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Empresas </a>'; 
                    }else {
                        
                        echo '<a class="nav-link dropdown-toggle text-center text-dark" href="empresas" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Empresas </a>'; 
                    }
                ?>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item color-novedades <?php echo $ruta == 'Novedades' ? 'bg-gg-links':''; ?>" href="novedades">Novedades Informaticas</a>
                <a class="dropdown-item color-gc  <?php echo $ruta == 'gc' ? 'bg-gg-links':''; ?>" href="gc">Inversiones GC 2021</a>
                <a class="dropdown-item color-acg  <?php echo $ruta == 'acg' ? 'bg-gg-links':''; ?>" href="acg">Inversiones A.C.G. 2017</a>
                <a class="dropdown-item color-medicalclin <?php echo $ruta == 'Medicalclin' ? 'bg-gg-links':''; ?>" href="medicalclin">Medicalclin</a>
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>

            <li class="nav-item dropdown">
                <?php 
                    if($ruta == 'Informatica' || $ruta == 'Suministros-Industriales' || $ruta == 'Automatizacion' || $ruta == 'Construccion' || $ruta == 'Electricidad' 
                    || $ruta == 'Respuestos-Livianos' || $ruta == 'Respuestos-Pesados' || $ruta == 'Suministros-Medicos' || $ruta == 'Suministros-Agricolas') {
                        
                        echo '<a class="nav-link dropdown-toggle text-center color-gg-verde" href="negocios" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Línea de Negocios </a>'; 
                    }else {
                        
                        echo '<a class="nav-link dropdown-toggle text-center text-dark" href="negocios" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Línea de Negocios </a>'; 
                    }
                ?>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item color-novedades <?php echo $ruta == 'Informatica' ? 'bg-gg-links':''; ?>" href="Informatica">Informática</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item color-gc <?php echo $ruta == 'Suministros-Industriales' ? 'bg-gg-links':''; ?>" href="Suministros-Industriales">Suministros Industriales</a>
                <a class="dropdown-item color-gc <?php echo $ruta == 'Suministros-Agricolas' ? 'bg-gg-links':''; ?>" href="Suministros-Agricolas">Suministros Agrícolas</a>
                <a class="dropdown-item color-gc <?php echo $ruta == 'Construccion' ? 'bg-gg-links':''; ?>" href="Construccion">Construcción</a>
                <a class="dropdown-item color-gc <?php echo $ruta == 'Electricidad' ? 'bg-gg-links':''; ?>" href="Electricidad">Electricidad Alta-Baja</a>
                <a class="dropdown-item color-gc <?php echo $ruta == 'Automatizacion' ? 'bg-gg-links':''; ?>" href="Automatizacion">Automatización Industrial</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item color-acg <?php echo $ruta == 'Respuestos-Livianos' ? 'bg-gg-links':''; ?>" href="Respuestos-Livianos">Respuestos de Vehículos Livianos</a>
                <a class="dropdown-item color-acg <?php echo $ruta == 'Respuestos-Pesados' ? 'bg-gg-links':''; ?>" href="Respuestos-Pesados">Respuestos de Vehículos Pesados</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item color-medicalclin <?php echo $ruta == 'Suministros-Medicos' ? 'bg-gg-links':''; ?>" href="Suministros-Medicos">Suministros Médicos</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-center <?php echo $ruta == 'Contacto' ? 'color-gg-verde':''; ?>" href="contacto">Contacto<span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
          
            <button class="btn my-2 my-sm-0 color-gg-verde mx-auto" type="button"> <i class="fab fa-twitter"></i> </button>
            <button class="btn my-2 my-sm-0 color-gg-verde mx-auto" type="button"> <i class="fab fa-instagram"></i> </button>
            <button class="btn my-2 my-sm-0 color-gg-verde mx-auto" type="button"> <i class="fab fa-whatsapp"></i> </button>
            <button class="btn my-2 my-sm-0 color-gg-verde mx-auto" type="button"> <a href="contacto" class="color-gg-verde"><i class="far fa-envelope"></i></a>  </button>
          </form>
        </div>
      </nav>


      <?php  
        
        #Establecer las rutas blancas para cada página

        if(isset($_GET['ruta'])) {

            if($rutas[0] == 'inicio') {
                include 'modulos/inicio.php'; 
            }elseif($rutas[0] == 'novedades') {
                include 'modulos/novedades.php';
            }elseif($rutas[0] == 'medicalclin') {
                include 'modulos/medicalclin.php';
            }elseif($rutas[0] == 'acg') {
                include 'modulos/acg.php';
            }elseif($rutas[0] == 'gc'){
                include 'modulos/gc.php';
            }elseif($rutas[0] == 'contacto') {
                include 'modulos/contacto.php';

            }elseif($rutas[0] == 'Suministros-Industriales') {

                include 'modulos/suministros-industriales.php';

            }elseif($rutas[0] == 'Informatica') {

                include 'modulos/informaticos.php';

            }elseif($rutas[0] == 'Automatizacion') {

                include 'modulos/automatizacion-industrial.php';
            
            }elseif($rutas[0] == 'Construccion') {

                include 'modulos/construccion.php';
            
            }elseif($rutas[0] == 'Electricidad') {

                include 'modulos/electricidad.php';
            
            }elseif($rutas[0] == 'Respuestos-Livianos') {

                include 'modulos/repuestos-livianos.php';
            
            }elseif($rutas[0] == 'Respuestos-Pesados') {

                include 'modulos/repuestos-pesados.php';
            
            }elseif($rutas[0] == 'Suministros-Medicos') {

                include 'modulos/suministros-medicos.php';
            
            }elseif($rutas[0] == 'Suministros-Agricolas') {

                include 'modulos/suministros-agricolas.php';
            }
            
            
            else {
                include 'modulos/inicio.php';

            }
           
                
        }else {
            include 'modulos/inicio.php'; 
        }

    
        
      ?>

      <script src="<?php echo $url; ?>vistas/js/custom.js"></script>
      <script src="<?php echo $url; ?>vistas/js/validar.js"></script>

      <!-- Start of HubSpot Embed Code --> 
      <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7050666.js"></script>  -->
      <!-- End of HubSpot Embed Code -->
</body>
</html>