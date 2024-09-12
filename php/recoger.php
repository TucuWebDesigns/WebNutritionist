<?php
		function recogeDato($campo){
		return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
		}

		$nombre = recogeDato ("nombre");
		$movil = recogeDato ("tel");
		$email = recogeDato ("email");
		$mensaje = recogeDato ("mensaje");


		if (isset($_REQUEST["enviar"])){
			$para = "matiash.mh@gmail.com";
			$asunto = "Consulta web - Nutrición";
			$mensaje = "Datos de la consulta: \n".
				"Nombre: ".$nombre."\n".
				"Movil: ".$movil."\n".
				"Email: ".$email."\n\n".
				"Mensaje: \n".$mensaje;

			mail($para, $asunto, $mensaje);
			echo "<p><b>Tu mensaje fue enviado correctamente.</b></p>\n";
			echo "<p><b>Nos pondremos en contacto lo antes posible.</b></p>\n";
		}
?>		

		   
		  