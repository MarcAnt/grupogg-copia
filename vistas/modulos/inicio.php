<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" style="background-color: #aaa !important;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" style="background-color: #aaa !important;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" style="background-color: #aaa !important;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3" style="background-color: #aaa !important;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4" style="background-color: #aaa !important;"></li>
            
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="vistas/img/slidegg.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5 class="color-gg-verde">First slide label</h5>
                    <p class="color-gg-verde">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="vistas/img/slideni.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5 class="color-gg-verde">Third slide label</h5>
                    <p class="color-gg-verde">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="vistas/img/slidemc.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5 class="color-gg-verde">Second slide label</h5>
                    <p class="color-gg-verde">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="vistas/img/slidegc.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5 class="color-gg-verde">Second slide label</h5>
                    <p class="color-gg-verde">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="vistas/img/slideacg.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5 class="color-gg-verde">Second slide label</h5>
                    <p class="color-gg-verde">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   
    <div class="container-fluid  <?php echo $ruta == 'Inicio' ?  'bg-inicio' : '';?>">

        <div class="row d-sm-block d-md-none d-lg-none fondo-img-gg">
            <div class="col-xs-12">
                <img src="vistas/img/slidegg.jpg" alt="GrupoGG" class="img-grupogg img-fluid">
            </div>
        </div>

        <div class="row somos-gg">

            <div class="col-md-6 col-sm-12 mx-auto my-auto d-flex justify-content-center">
                <img src="vistas/img/img-somos.png" class="img-fluid">
            </div>
            
            <div class="col-md-6 col-sm-12 my-2 d-flex justify-content-center flex-column">
                <h1 class="text-center">Somos</h1>
                <p class="text-center" style="font-size: .9rem"> Un grupo de empresas donde ofrecemos una gran 
                    gama de servicios y productos en el área industrial, los cuales responden a 
                    las necesidades del contexto y la demanda actual del mercado. Como profesionales en 
                    el área industrial contamos con los conocimientos, aptitudes y experiencia necesaria 
                    para asumir nuevos desafíos, así como también el desarrollo y cumplimiento de metas.</p>
            </div>
        </div>

        <div class="row servicios-gg">

            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center">
                <h1 class="text-center mx-auto my-5">Nuestros Servicios</h1>
            </div>
          
            <div class="col-md-7 col-sm-12 d-flex justify-content-center align-items-center ">
                
                <div class="row ">
                    <div class="col-md-4 mb-5 d-flex justify-content-center align-items-center">
                        <div class="list-group list-group-flush" id="list-tab" role="tablist">
                        <a class="text-center" id="novedades-list" data-toggle="list" href="#novedades" role="tab" aria-controls="home"><span class="text-dark  text-center" style="font-size: 3rem;"><i class="fas fa-code"></i></span></a>
                        <a class="text-center" id="medicalclin-list" data-toggle="list" href="#medicalclin" role="tab" aria-controls="profile"><span class="text-dark  text-center" style="font-size: 3rem;"><i class="fas fa-heartbeat"></i></span></a>
                        <a class="text-center" id="gc-list" data-toggle="list" href="#gc" role="tab" aria-controls="messages"><span class="text-dark text-center" style="font-size: 3rem;"><i class="fas fa-hard-hat"></i></span></a>
                        <a class="text-center" id="acg-list" data-toggle="list" href="#acg" role="tab" aria-controls="settings"><span class="text-dark text-center" style="font-size: 3rem;"><i class="fas fa-cog"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="novedades" role="tabpanel" aria-labelledby="novedades-list">
                        <h4 class="text-center color-novedades">Novedades Informáticas</h4>
                        <ul class="">
                            <li>Licenciamiento Microsoft.</li>
                            <li>Suministros e instalación de cableado estructurado Voz y Datos.</li> 
                            <li>Suministros e instalación de servidores y estaciones de trabajo.</li> 
                            <li>Organización de Red bajo dominio o grupo de trabajo.</li>
                            <li>Alojamiento Web</li> 
                            <li>Desarrollo de proyectos Web y APP.</li>
                            <li>Suministros de tintas y toner.</li> 
                            <li>Desarrollo de proyectos informáticos.</li>
                            <li>Sistema de Vigilancia (Cámara IP).</li>
                            
                        </ul>
                        </div>
                        <div class="tab-pane fade" id="medicalclin" role="tabpanel" aria-labelledby="medicalclin-list">
                        <h4 class="text-center color-medicalclin">Medicalclin</h4>
                        <ul class="">           
                            <li>Importación y distribución de materiales médicos quirúrgicos e instrumentación.</li>
                            <li>Atención a petición y formalizar la venta, para convertirnos en amigo y principal suplidor del cliente.</li> 
                            <li>Cada orden de compra es manejada individualmente con el grado de importancia y prioridad que se merecen, desde su solicitud hasta que la misma llegue a su destino final. De esta manera afianzar una 
                            duradera relación, al comprobar la eficiencia de nuestros servicios.</li> 
                        </ul>
                        </div>
                        <div class="tab-pane fade" id="gc" role="tabpanel" aria-labelledby="gc-list">
                            <h4 class="text-center color-gc">Inversiones G.C. 2021</h4>
                            <ul>
                                <li>Suministros Industriales.</li>
                                <li>Materiales Eléctricos (Alta y baja Tensión)</li>
                                <li>Implementos y equipos de Seguridad Laboral.</li>
                                <li>Materiales de construcción.</li>
                                <li>Repuestos para línea de producción (Nacional e Importado)</li>
                                <li>Elaboración y ejecución de proyectos de Ingeniería.</li>
                                <li>Servicio de remodelaciones.</li>
                                <li>Mantenimiento preventivo y correctivo para equipos industriales.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="acg" role="tabpanel" aria-labelledby="acg-list">
                            <h4 class="text-center color-acg">Inversiones A.C.G. 2017 C.A.</h4>
                            <ul>
                                <li>Importación de Repuestos Automotrices de Alta Gama.</li>
                                <li>Materiales Automotrices Consumibles (Filtros Aceite, Filtro de Aire, Filtro de Gasolina).</li>
                                <li>Suministros de repuestos para vehículos Livianos, Pesados, Maquinaria Agrícola, Tractores y Maquinas Industriales.</li>
                                <li>Calidad de todas las líneas que representa ofreciéndole sólo productos lideres y de reconocido prestigio nacional e internacional</li>
                                
                            </ul>

                        </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

        <div class="row empresas-gg d-flex justify-content-center">
            
            <div class="col-md-12 mx-auto text-center d-flex justify-content-center align-items-center">
                <h1 class="text-center mt-4">Empresas</h1>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center flex-wrap ">
                <div class="col-md-6 col-sm-12 col-xs-12 mx-auto my-4 text-center d-flex justify-content-center flex-column">
                    
                    <img src="vistas/img/logo-ni.png" alt="Novedades Informáticas" class="img-fluid mx-auto" style="width: 250px; height: 250px;">
                    <a href="novedades" class="mx-5 my-2 color-novedades">Ver Información de Empresa</a>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mx-auto my-4 text-center d-flex justify-content-center flex-column">
                    
                    <img src="vistas/img/logo-mc.png" alt="Medicalclin" class="img-fluid mx-auto" style="width: 450px; height: 150px;">
                    <a href="medicalclin" class="mx-5 my-2 color-medicalclin">Ver Información de Empresa</a>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mx-auto my-4 text-center d-flex justify-content-center flex-column">
                    
                    <img src="vistas/img/logo-gc.png" alt="Inversiones G.C." class="img-fluid mx-auto" style="width: 450px; height: 150px;">
                    <a href="gc" class="mx-5 my-2 color-gc">Ver Información de Empresa</a>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mx-auto my-4 text-center d-flex justify-content-center flex-column">
                    
                    <img src="vistas/img/logo-acg.png" alt="A.C.G" class="img-fluid mx-auto" style="width: 200px; height: 150px;">
                    <a href="acg" class="mx-5 my-2 color-acg">Ver Información de Empresa</a>

                </div>

            </div>
        
        </div>

        <div class="row mision-vision-gg">
            <div class="col-md-4 col-sm-12 d-flex justify-content-center flex-column">
                <h1 class="text-center text-white mx-auto" id="mision-vision">Misión</h1>
            </div>
            <div class="col-md-8 col-sm-12 text-center d-flex justify-content-center flex-column">
                <p class="text-center text-white mx-5" style="font-size: 1.5rem; " id="mision-vision-texto"> 
                “Satisfacer las necesidades de nuestros clientes de una forma integral alcanzando la excelencia en el servicio”.</p>
            </div>
            
        </div>

        <div class="row info-gg">

            <div class="col-md-6 col-sm-12 my-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <span class="text-center color-gg-verde" style="font-size: 5rem" ><i class="fas fa-mobile-alt"></i></span>

                        </div>
                        
                        <!-- <h1 class="text-center card-title mx-auto my-5">Dirección</h1>
                        <p class="text-center my-5 " style="font-size: 1.2rem"> 
                            Urb. Calicanto 2da Transversal (Casa Calicanto) Oficina 6, Maracay, Estado Aragua.
                        </p> -->
                        <h2 class="text-center card-title mx-auto my-5">Teléfonos:</h2>
                        <p class="text-center my-5 " style="font-size: 1.2rem"> 
                            Tlf. Oficina: 0243-2174927 <br> Móvil: 0424-3208724 / 0424-3363718
                        </p>
                    </div>
                </div>

            </div>
          
    
        </div>

        <div class="row bg-contacto">

            <div class="col-6 col-md-6 col-sm-12 col-xs-12 my-auto ">
              <div class="card formulario mx-auto">
                <div class="card-body"  >
                    <div class="card-title d-flex justify-content-center">
                    <span class="text-center color-gg-verde" style="font-size: 5rem" ><i class="fas fa-at"></i></span>
                    </div>

                    <form role="form" method="post" id="formulario"  onsubmit="return validarContactenos()">
                      <div class="row">
                        <div class="col-md-6 form-group">
  
                          <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required> 
                        </div>
                        <br>
                        <div class="col-md-6 form-group">
                          <input type="text" id="telefonoContactenos" name="telefonoContactenos" class="form-control" placeholder="Teléfono" required> 
  
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12 form-group">

                          <input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required>  
                        </div>

                      </div>
      
                        <br>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>

                        </div>
                      </div>                
    
                        <br>
                        <div class="d-flex justify-content-center">
    
                          <input type="submit" value="Enviar" class="btn btn-lg rounded-pill mx-auto bg-gg-verde text-white" id="enviar">         
                        </div>
      
                    </form>

                    <?php 
                        $contactenos = new ControladorPlantilla();
                        $contactenos -> ctrFormularioContactenos();
                        
                    ?>

                </div>

                </div>

            </div>

            <div class="col-6 col-md-6 col-sm-12 col-xs-12 d-none d-sm-block my-auto text-center">
                <h1 class="text-center text-white">Contáctanos</h1>
            </div>

          </div>

            
            <?php include 'footer.php';  ?>
            <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

    </div>