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
	<link rel="stylesheet" href="css/ejercicios.css">
</head>
<body>
<?php
		include_once("templates/nav.php");
		?>
	<div class="midieta">
	<section>
		<div class="img-6">
			<h3>Logra Resultados</h3>
			<p>Hemos desarrollado ejercicios que puedes hacer tanto en el gimnasio como
			en tu hogar o donde quieras.</p>
		</div>
		
		<div class="img-7">
			<h3>Planes de entrenamiento</h3>
			<p>Mirá los entrenamientos y ejercicios  exlusivos para vos.
				Tenemos diferentes tipos de rutinas elegí una y vivi 
			potencid@</p>
		</div>
		<div class="tipos-ejercicios">
			<div class="caja1">
				<a href="ejercicios_sub.php?opcion=1"><h2>Bajar de Peso</h2></a>
			</div>
			<div class="caja2">
				<a href="ejercicios_sub.php?opcion=3"><h2>Aumentar Masa Muscular</h2></a>
			</div>
			<div class="caja3">
				<a href="ejercicios_sub.php?opcion=2"><h2>Tonificar</h2></a>
			</div>
		</div>
		</div>
	</section>
</div>
	<?php
		
		include_once("templates/footer.html"); ?>
	<script src="sources/jquery.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/header.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
</body>
</html>