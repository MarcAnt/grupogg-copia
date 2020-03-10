

<!-- <div class="container-fluid <?php #echo $ruta == 'Medicalclin' ?  'bg-medicalclin' : '';?>" id="medicalclin-page">
  <div class="row">
    
    <div class="col-md-12 col-xs-12 col-sm-12 d-flex justify-content-center">
      <img src="vistas/img/logo-mc.png"  class="mx-auto img-fluid" style="width: 35em; height: 15em; margin-top: 5em" alt="Medicalclin">
    </div>
  </div>

  <div class="row d-flex justify-content-center align-items-center flex-column">
    <h1 class="text-uppercase my-5 text-md-center text-sm-center">Línea de Productos</h1>
  </div>

  <div class="row propuesta h-75">
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center flex-column">
      <h3 class="text-sm-left text-md-center text-sm-center" id="titulo-mc">Lencería Descartable</h3>
      <p class="text-sm-center text-md-center color-medicalclin" id="texto-mc">
      Guantes de Latex
      <br>
      Guantes de Latex Quirúrgicos
      <br> 
      Ropa Quirúrgica (batas, botas, gorro, monos)
     
      <br>
      Guantes de Nitrilo
    
      </p>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
      <img src="vistas/img/guantes.png" id="img-mc" class="img-fluid my-auto" >
    </div>
  </div>

    <div class="row h-75">
        
        <div class="col-md-12 d-flex justify-content-center">
        <h4 class="text-uppercase my-5 text-center">Para mayor información, <a href="contacto">Contáctanos</a> </h4>
        </div>
    </div>

  <?php #include 'footer.php';  ?>
  <input type="hidden" value="<?php #echo $url; ?>" id="rutaOculta">

</div> -->

<div class="container-fluid <?php echo $ruta == 'Novedades' ?  'bg-novedades' : '';?>">
          <div class="row bg-nosotros-medicalclin" >
            
              <div class="col-md-6 col-sm-12 col-xs-12 d-flex flex-column justify-content-center text-center">
                  <h5 class="animate-text-4">Nos esforzamos por</h5>
                  <h1 class="animate-text-5 font-weight-bold">Atenderte como mereces</h1>
              </div>

          </div>

          <div class="row bg-info-nosotros">
            <div class="col-md-12 col-sm-12 my-5">
              <h1 class="mx-auto mt-4 text-center w-75 font-weight-bold color-savo ">Nosotros</h1>
             <p class="text-justify mx-auto mt-3 w-75" style="text-indent: 1em;">
             <span class="color-medicalclin">Inversiones Medicalclin C.A.</span> Somos una empresa creada con el fin de ofrecer a los profesionales de la medicina, 
             la excelencia en la calidad de nuestros materiales y equipos médicos, de esta manera, cubrir las 
             necesidades de nuestros clientes y competir razonablemente con los precios del mercado.</p>
              
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center mb-5">

              <img src="vistas/img/logo-mc.png" style="width: 30em; height: 10em;" class="img-fluid">
      
            </div>
          </div>
      

         
          <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
          <?php include 'footer.php';  ?>
          
      </div>