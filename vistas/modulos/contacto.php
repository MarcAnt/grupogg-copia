<div class="container-fluid">
          <div class="row bg-contacto-page" >

            <div class=" col-md-6 col-sm-12 col-xs-12 mb-4">
              
                <h1 class="text-center color-gg-verde my-5">INFO:</h1>
        
                <h6 class="ml-3" style="font-size: 2em;">Teléfonos:</h6>
                <p class="ml-3" style="font-size: 2em;">Oficina: 0243-2174927 Móvil: 0424-3208724 / 0424-3363718</p>
                
                <h6 class="ml-3">Nuestras Redes Sociales:</h6>
                <form class="form-inline ml-1 my-2 my-lg-0">
                  <button class="btn my-2 my-sm-0 color-gg-verde" style="font-size: 5em;" type="button"> <i class="fab fa-twitter"></i> </button>
                  <button class="btn my-2 my-sm-0 color-gg-verde" style="font-size: 5em;" type="button"> <i class="fab fa-instagram"></i> </button>
                </form>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 mb-4">

                <div class="card formulario mt-5" >
                    <div class="card-body">
                        <div class="card-title">
                            <h1 class="text-center color-gg-verde my-5">Contáctanos</h1>
                        </div>

                        <form role="form" method="post" >

                          <div class="row">
                            <div class="col-md-6 form-group">
      
                              <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required> 
                            </div>
                            <br>
                            <div class="col-md-6 form-group">
                              <input type="text" id="telefonoContactenos" name="telefonoContactenos" class="form-control" placeholder="Teléfono" required> 
      
                            </div>
  
                          </div>

                          <input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required>  
        
                          <br>
                                        
                          <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>
      
                          <br>
                          <div class="d-flex justify-content-center">
      
                            <input type="submit" value="Enviar" class="btn btn-lg  rounded-pill bg-gg-verde text-white mx-auto" id="enviar">         
                          </div>
          
                        </form>

                        <?php 
                          $contactenos = new ControladorPlantilla();
                          $contactenos -> ctrFormularioContactenos();
                        
                        ?>

                    </div>

                </div>  

            </div>

          </div>
          <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
          <?php include 'footer.php';  ?>
          
      </div>