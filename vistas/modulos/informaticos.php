

<div class="container-fluid <?php echo $ruta == 'Informatica' ?  'bg-novedades' : '';?>" id="novedades-page">
  <div class="row">
    
    <div class="col-md-12 col-12 d-flex d-mar">
      <img src="vistas/img/logo-ni.png"  class="mx-auto" style="width: 20em; height: 20em;" alt="Novedades Informáticas">
    </div>
  </div>

  <div class="row d-flex justify-content-center">
    <h1 class="text-uppercase my-5">Propuesta y Servicios</h1>
  </div>

  <div class="row propuesta h-75">
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center flex-column">
      <h3 class="text-sm-left text-md-center " id="titulo-novedades">Redes</h3>
      <p class="text-sm-left text-md-center color-gg-verde" id="texto-novedades">
      Cableado Estructurado TCP /IP. 
      <br>
      Cableado de Fibra Óptica
      <br> 
      Voz sobe IP 
      <br>
      Cámaras de Seguridad
      </p>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
      <img src="vistas/img/network.png" id="img-novedades" class="img-fluid my-auto" >
    </div>
  </div>
  
  <div class="row h-75">
        
        <div class="col-md-12 d-flex justify-content-center">
        <h4 class="text-uppercase my-5 text-center">Para mayor información, <a href="contacto">Contáctanos</a> </h4>
        </div>
  </div>
  <?php include 'footer.php';  ?>
  <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

</div>