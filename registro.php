
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>REGISTRO</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="./imagenes/favicon.ico">
	<link rel="stylesheet" href="./css/fontello.css">
	<link rel="stylesheet" href="./css/fonts.css">
	<link rel="stylesheet" href="./css/gral-rules.css">
	<link rel="stylesheet" href="./css/registro.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/toast.css">
</head>
<body>
	
	<?php
	
	session_start();
	include_once('./login/registrarse.html');

	if (isset($_SESSION['usuario'])) {
		echo "YA HAY USUARIO";
	}
	else{
		if (isset($_POST['inicio'])) {
			include_once("./php/conexion.php");
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$pass = $_POST['password'];
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];
			$edad = $_POST['edad'];
			$metodo_entrenamiento = $_POST['metodo_entrenamiento'];
			$query = "INSERT INTO `registrados`(`nombre`, `correo`, `pass`, `peso`, `altura`, `edad`, `metodo_entrenamiento`) VALUES ('$nombre', '$correo', '$pass', '$peso', '$altura', '$edad', '$metodo_entrenamiento')";
			$consulta = $conexion -> query($query);
			// header("Location: ../logueo.php");
			
			$mensaje= "Gracias por registrarte ".$nombre.", ingresá al siguiente mail para activar tu cuenta y empezar a 
			vivir potenciado!!.<br>";
			$mensaje.= "<a href='https://potenciados.000webhostapp.com/login/validar_mail.php?nombre=".$nombre."&correo=".$correo."&altura=".$altura."&edad=".$edad."'>Activar Cuenta</a> <br>";
			$mensaje.= "Si no se registró, desestime este mensaje<br>";
			// $encabezado = 'From: Potenciados <potenciadossimepre@gmail.com>'. "\r\n";
			$encabezado= 'Content-type:text/html;charset=UTF-8'. "\r\n";

			$mail = mail($correo, "Activación de Cuenta - Potenciados", $mensaje,$encabezado);
			if($mail){
				echo '<div class="toast toast--visible toast--success">
				<span class="msg">Usuario Registrado. Revisar correo para activar la cuenta</span>
				<span class="cerrar-btn " id="cierre-registro">
				<span class="icon-cancel"></span>
				</span>
				</div>';
				
			}
			else{
				echo '<div class="toast toast--visible toast--error">
				<span class="msg">Error al registrarse</span>
				<span class="cerrar-btn" id="cierre-registro">
				<span class="icon-cancel cierre-contacto"></span>
				</span>
				</div>';
				
				
			}

			
		}
		else{
			// echo "No hay datos";
		}
	}
	?>
	<?php
		include_once("./templates/footer.html"); ?>


		
		<script src="./sources/jquery.min.js"></script>
		<script src="./js/footer.js"></script>
		<script src="./js/toast.js"></script>

</body>
</html>
