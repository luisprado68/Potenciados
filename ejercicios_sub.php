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
	<link rel="stylesheet" href="css/ejercicios.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/tabla.css">
	<?php
		if (isset($_GET['opcion'])) {
				$opcion = $_GET['opcion'];
				switch ($opcion) {
					case 1:
						echo "<link rel='stylesheet' href='css/dias_bajar.css'>";
						break;
					case 2:
						echo "<link rel='stylesheet' href='css/dias_tonificar.css'>";
						break;
					case 3:
						echo "<link rel='stylesheet' href='css/dias_aumentar.css'>";
						break;
				}
			}
		?>
</head>
<body>
	<?php
		include_once("templates/nav.php");
		if (isset($_GET['opcion'])) {
			$opcion = $_GET['opcion'];
			switch ($opcion) {
				case 1:
					include_once("subpages/dias_bajar.php");
					break;
				case 2:
					include_once("subpages/dias_tonificar.php");
					break;
				case 3:
					include_once("subpages/dias_aumentar.php");
					break;
				default:
					header("Location: ejercicios.php");
					break;
			}
		}
		else{
			header("Location: ejercicios.php");
		}
		include_once("templates/footer.html"); ?>
	<script src="sources/jquery.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/header.js"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
</body>
</html>