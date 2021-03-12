
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CONTACTO</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/gral-rules.css">
	<link rel="stylesheet" href="css/contacto.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/toast.css">
	
</head>
<body>
	<?php
	
	include_once("templates/section_contacto.html");
		
		if (isset($_GET['inicio']) && isset($_GET['acepto'])) {
			$nombre = $_GET['nombre'];
			$correo = $_GET['correo'];
			$comentario = $_GET['comentario'];
			$mensaje = "De: ".$nombre."\nCorreo: ".$correo."\n\n".$comentario;
			
				$mail = mail("potenciadossiempre@gmail.com", "COMENTARIO: Potenciados", $mensaje);
			
			
			if($mail){
				echo '<div class="toast toast--visible toast--success">
				<span class="msg">Comentario Enviado!</span>
				<span class="cerrar-btn " id="cierre-contacto">
				<span class="icon-cancel"></span>
				</span>
				</div>';
				
			}
			else{
				echo '<div class="toast toast--visible toast--error">
				<span class="msg">No se pudo enviar el comentario!</span>
				<span class="cerrar-btn" id="cierre-contacto">
				<span class="icon-cancel cierre-contacto"></span>
				</span>
				</div>';
				
			}
			
		}else{

		}

		 
		

		include_once("templates/footer.html");
	?>
	<script src="sources/jquery.min.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/toast.js"></script>
</body>
</html>

