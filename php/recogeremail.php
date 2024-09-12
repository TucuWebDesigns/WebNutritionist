<?php
		function recogeDato($campo){
		return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
		}
		$email = recogeDato ("email1");

		if (isset($_REQUEST["enviar"])){
			$para = "matiash.mh@gmail.com";
			$asunto = "Plan de Nutrición Gratuito";
			$mensaje = "Datos de la consulta: \n".
			
				"Email: ".$email1."\n\n".

			mail($para, $asunto, $mensaje);
			echo "<p><b>Tu mensaje fue enviado correctamente.</b></p>\n";
			echo "<p><b>Nos pondremos en contacto lo antes posible.</b></p>\n";
			echo "<input type="text" value="Volver">"
		}
?>	