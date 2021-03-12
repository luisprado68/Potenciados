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
	<link rel="stylesheet" href="./css/fontello.css">
	<link rel="shortcut icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/gral-rules.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer.css">
	
</head>
<body>
	<?php
		include_once("templates/nav.php");
		include_once("templates/header.html");
		include_once("templates/section.html");
		include_once("templates/footer.html"); ?>
	<script src="sources/jquery.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/header.js"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
</body>
</html>