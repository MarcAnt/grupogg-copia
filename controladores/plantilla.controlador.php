<?php 

class ControladorPlantilla {

    public function plantilla() {
        include 'vistas/plantilla.php'; 
    }

    /*=============================================
	FORMULARIO CONTACTENOS
	=============================================*/

	public function ctrFormularioContactenos(){

		if(isset($_POST['mensajeContactenos'])){
			
			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombreContactenos"]) &&
			preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["mensajeContactenos"]) &&
			preg_match('/^[0-9- ]+$/', $_POST["telefonoContactenos"]) &&
			preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailContactenos"])){

				/*=============================================
				ENVÍO CORREO ELECTRÓNICO
				=============================================*/

					date_default_timezone_set("America/Caracas");

					$url = Ruta::mdlRuta();	
					
					

					// Instantiation and passing `true` enables exceptions
					$mail = new PHPMailer(true);
					$mail->CharSet = 'UTF-8';
					try {
						//Server settings
						// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
						$mail->isSMTP();                                            // Send using SMTP
						$mail->Host       = 'skyler.remarkablecloud.com';                    // Set the SMTP server to send through
						$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
						$mail->Username   = 'mercadeo@grupogg.com.ve';                     // SMTP username
						$mail->Password   = 'Pana142536';                               // SMTP password
						$mail->SMTPSecure = ssl;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
						$mail->Port       = 465;                                    // TCP port to connect to

						//Recipients
						$mail->setFrom('mercadeo@grupogg.com.ve', 'Grupo GG');
						$mail->addAddress('mercadeo@grupogg.com.ve', $_POST['nombreContactenos']);     // Add a recipient
						// $mail->addAddress('ellen@example.com');               // Name is optional
						$mail->addReplyTo($_POST['emailContactenos'], $_POST['nombreContactenos']);
						// $mail->addCC('cc@example.com');
						// $mail->addBCC('bcc@example.com');

						// Attachments
						// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
						// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

						// Content
						$mail->isHTML(true);                                  // Set email format to HTML
						$mail->Subject = 'Grupo GG';
						$mail->Body    = "<p> Mensaje de: ".$_POST['nombreContactenos']." Correo: ".$_POST['emailContactenos']."</p> 
										  <p> Mensaje: ".$_POST['mensajeContactenos']."</p> 
										  <p> Número telefónico: ".$_POST['telefonoContactenos']."</p>
										";
						$mail->AltBody = "Mensaje Enviado por el usuario: ".$_POST["nombreContactenos"];
						$envio = $mail->send();
						// echo 'Message has been sent';

						if(!$envio) {
							echo '<script> 
								Swal.fire({
									icon: "error",
									title:  "¡ERROR!",
									text: "¡Ha ocurrido un problema enviando el mensaje!",
									
								})
								
								</script>';

						}else{	

							echo '<script> 

									Swal.fire({
										title: "¿Deseas enviar el mensaje?",
										
										icon: "warning",
										showCancelButton: true,
										confirmButtonColor: "#3085d6",
										cancelButtonColor: "#d33",
										confirmButtonText: "Enviar",
										cancelButtonText: "Cancelar"
									}).then((result) => {

										if (result.value) {

											Swal.fire(
												"¡Mensaje Enviado!",
												
												"Por favor, revise la bandeja de Entrada de su correo o en carpeta de SPAM para más información"

											)

											setTimeout(function(){
												
												window.location.href = "inicio" 
											},1500)
										}
									})

								</script>';

							#Enviar el correco al usuario
								// $mailC = new PHPMailer(true);
								// $mailC->CharSet = 'UTF-8';
							// try {
								//Server settings
								// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
								// $mail->isSMTP();                                            // Send using SMTP
								// $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
								// $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
								// $mail->Username   = 'blackiron662@gmail.com';                     // SMTP username
								// $mail->Password   = '66666626666662';                               // SMTP password
								// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
								// $mail->Port       = 587;                                    // TCP port to connect to
		
								//Recipients
								$mail->setFrom('mercadeo@grupogg.com.ve', 'Grupo GG');
								$mail->addAddress($_POST['emailContactenos'], $_POST['nombreContactenos']);     // Add a recipient
								// $mail->addAddress('ellen@example.com');               // Name is optional
								$mail->addReplyTo('mercadeo@grupogg.com.ve', 'Grupo GG');
								// $mail->addCC('cc@example.com');
								// $mail->addBCC('bcc@example.com');
		
								// Attachments
								// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
								// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		
								// Content
								$mail->isHTML(true);                                  // Set email format to HTML
								$mail->Subject = 'Grupo GG';
								$mail->msgHTML('
								<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">

									<center><img style="padding:20px; width:50%" src="'.$url.'/vistas/img/grupogg-logo.png"></center>
								
									<div style="position:relative; margin:auto; width:600px; background:white; padding-bottom:20px">
								
										<center>
					
								
										<h3 style="font-weight:100; color:#00627e;">Hemos recibido su consulta</h3>
								
										<hr style="width:80%; border:1px solid #ccc">
										
										<h4 style="font-weight:100; color:#00627e; padding:0px 20px; text-transform:uppercase">Estaremos resolviendo su inquietud lo más pronto posible. ¡Muchas Gracias!</h4> 
										
										<a href="'.$url.'" target="_blank" style="text-decoration:none">

											<div style="line-height:60px; background:#0aa; width:60%; color:white">Ingrese nuevamente al sitio</div>

										</a>
								
										
										<h5 style="font-weight:100; color:#00627e; padding:0px 20px; text-transform:uppercase">GRUPO GG &copy 2020</h5> 

										<hr style="width:80%; border:1px solid #ccc">
								
										</center>
								
									</div>
								
								</div>
								');
								$mail->send();

						
						}
	
					} catch (Exception $e) {
						echo '<script> 
								Swal.fire({
									icon: "error",
									title:  "¡ERROR!",
									text: "¡Ha ocurrido un problema enviando el mensaje!",
									
								})
								
								</script>';
						
					}


			}else{

				echo'
					<script> 
						Swal.fire({
							icon: "error",
							title:  "¡ERROR!",
							text: "¡Ha ocurrido un problema enviando el mensaje!",
							
						})
		
					</script>';


			}

		}

	}



}