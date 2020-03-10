<div class="container-fluid <?php echo $ruta == 'Medicalclin' ?  'bg-medicalclin' : '';?>" id="medicalclin-page">
  <div class="row">
    
    <div class="col-md-12 col-xs-12 col-sm-12 d-flex justify-content-center">
      <img src="vistas/img/logo-mc.png"  class="mx-auto img-fluid" style="width: 30em; height: 10em; margin-top: 5em" alt="Medicalclin">
    </div>
  </div>

  <div class="row d-flex justify-content-center align-items-center flex-column text-center">
    <h1 class="text-uppercase my-5 text-md-center text-sm-center">Línea de Productos</h1>
  </div>

  <div class="row propuesta h-75">
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center flex-column">
      <h3 class="text-sm-left text-md-center text-sm-center" id="titulo-mc">Emergencias</h3>
      <p class="text-sm-center text-md-center color-medicalclin" id="texto-mc">
      Resucitadores <br> Bombas de Infusión <br> Ventiladores<br> 
      Monitores Multiparametros <br> Laringoscopios <br>Desfibriladores
    
      </p>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
      <img src="vistas/img/desfibrilador.jpg" id="img-mc" class="img-fluid my-auto" alt="desfibrilador">
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