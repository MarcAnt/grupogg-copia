<div class="container-fluid <?php echo $ruta == 'gc' ?  'bg-gc' : '';?>" >
  <div class="row">
    
    <div class="col-md-12 col-xs-12 col-sm-12 d-flex justify-content-center">
      <img src="vistas/img/logo-gc.png"  class="mx-auto img-fluid"  style="width: 35em; height: 12em; margin-top: 8em; margin-bottom: 5em" alt="Inversiones G.C">
    </div>
  </div>

  <div class="row d-flex justify-content-center align-items-center flex-column text-center">
    <h1 class="text-uppercase  my-5 text-md-center text-sm-center">Propuesta y Servicio</h1>
  </div>

  <div class="row propuesta h-75">
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center flex-column">
      <h3 class="text-sm-left text-md-center text-sm-center " id="titulo-gc">Materiales de construcción para:</h3>
      <p class="text-sm-center text-md-center color-gc" id="texto-gc">
      Galpones. <br> Granjas . <br> Fincas. <br> Locales. <br> Oficinas. <br> Baños. <br> Techos.
     
    
      </p>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
      <img src="vistas/img/construccion.jpg" id="img-gc" class="img-fluid my-auto" >
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