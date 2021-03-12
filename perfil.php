<?php
	//inicia la variable $_SESSION
	session_start();
	//si no existe la sesión...
	if (!isset($_SESSION['usuario'])) {
		//se destruyen las variables
		session_unset();
		//se destruye la sesión
		session_destroy();
	}
	else{
		include_once("php/conexion.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Potenciados</title>
	<link rel="shortcut icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" href="./css/fontello.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/gral-rules.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/perfil.css">
</head>
<body>
	<?php
		include_once("templates/nav.php");
		include_once("templates/section_perfil.php");
		include_once("templates/footer.html");

		//MENSAJES

		if (isset($_GET['message'])) {
			$message = $_GET['message'];
			switch ($message) {
				case 2:
					echo "<script>alert('Su contraseña no es la correcta');</script>";
					break;
				case 3:
					echo "<script>alert('Las contraseña se cambió satisfactoriamente');</script>";
					break;
				case 4:
					echo "<script>alert('Las contraseñas no coinciden');</script>";
					break;
			}
		}
	?>
	<script src="sources/jquery.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/header.js"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/perfil.js"></script>
</body>
</html>