

<!-- <div class="container-fluid <?php #echo $ruta == 'Novedades' ?  'bg-novedades' : '';?>" id="novedades-page">
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
  <?php #include 'footer.php';  ?>
  <input type="hidden" value="<?php #echo $url; ?>" id="rutaOculta">

</div> -->

<div class="container-fluid <?php echo $ruta == 'Novedades' ?  'bg-novedades' : '';?>">
          <div class="row bg-nosotros-novedades" >
            
              <div class="col-md-6 col-sm-12 col-xs-12 d-flex flex-column justify-content-center text-center">
                  <h5 class="animate-text-4">Nos esforzamos por</h5>
                  <h1 class="animate-text-5 font-weight-bold">Atenderte como mereces</h1>
              </div>

          </div>

          <div class="row bg-info-nosotros">
            <div class="col-md-12 col-sm-12 mt-5 mb-2">
              <h1 class="mx-auto mt-4 text-center w-75 font-weight-bold color-savo ">Nosotros</h1>
              <p class="text-justify mx-auto mt-3 w-75" style="text-indent: 1em;">Los continuos cambios en los requerimientos del negocio, la desregulación que incide en la competencia global y los avances tecnológicos hacen que los sistemas de información, se conviertan en un requerimiento y un componente estratégico en la administración de la infraestructura tecnológica de las empresas. El nuevo paradigma en el mundo de la tecnología de información es lo que se conoce como inteligencia de negocios o business intelligence, versus la integración de los procesos.</p>
              <p class="text-justify mx-auto mt-3 w-75" style="text-indent: 1em;">
                Es parte de la premisa que las empresas exitosas en cada 
                una de sus dimensiones tienen resuelto los asuntos tradicionales de tecnología, hardware, redes y muy importante SOFTWARE. 
                Conscientes de ello, <span class="color-savo">GG New Technologies LLC & Novedades Informaticas GG, c.a</span> 
                empresas desarrolladoras de sistemas de información nos damos cuenta que los clientes desean aprovechar 
                todo lo relativo al negocio inteligente, nuestra labor es encaminarlos a alcanzar sus objetivos.</p>
              <p class="text-justify mx-auto mt-3 w-75" style="text-indent: 1em;">
                Si tiene una empresa que esta completamente automatizada puedes aplicar inteligencia de 
                negocios y predecir lo que te va a pasar. Para lograr un control total de su empresa tenemos la 
                solución integral que usted necesita. Su organización es un conjunto de procesos que se interrelacionan 
                y cada uno de ellos desencadena trazas que se reflejan en los diferentes departamentos.</p>
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center mb-5 logos-novedades">
              <img src="vistas/img/logo-ni.png" style="width: 10em; height: 10em;">
              <img src="vistas/img/logo-nt.png" style="width: 20em; height: 20em;">
              <img src="vistas/img/logo-savo.png" style="width: 15em; height: 5em;">
            </div>
          </div>
      

         
          <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
          <?php include 'footer.php';  ?>
          
      </div>