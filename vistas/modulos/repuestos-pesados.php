
<div class="container-fluid <?php echo $ruta == 'acg' ?  'bg-acg' : '';?>" id="acg-page-pesados">
  <div class="row">
    
    <div class="col-md-12 col-xs-12 col-sm-12 d-flex justify-content-center">
      <img src="vistas/img/logo-acg.png"  class="mx-auto img-fluid" style="width: 15em; height: 12em; margin-top: 10em" alt="Inversiones A.C.G 2017">
    </div>
  </div>

  <div class="row d-flex justify-content-center align-items-center flex-column text-center">
    <h1 class="text-uppercase  my-5 text-md-center text-sm-center">Respuestos de Vehículos Pesados</h1>
  </div>

  <div class="row propuesta h-75">
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center flex-column">
      <h3 class="text-sm-left text-md-center text-sm-center " id="titulo-acgp">Marcas</h3>
      <p class="text-sm-center text-md-center color-acg" id="texto-acgp">
      Ford <br> Chevrolet <br> Mitsubishi <br> Mack <br> Toyota <br> JAC 
        Iveco <br> Dongfeng
  
      </p>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
      <img src="vistas/img/mack.png" id="img-acgp" style="width: 25em; height: 20em;" class="img-fluid my-auto" >
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