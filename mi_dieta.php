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
	<link rel="stylesheet" href="css/mi_dieta.css">
</head>
<body>
<?php
		include_once("templates/nav.php");?>
	<div class="midieta">
	<section>
		<div class="img-9">
			<h3>Plan Nutricional</h3>
			<p>Ademas de los ejercicios, nuestro equipo nutrucional ha desarrollado
			planes nutricinales y licuados. Vivi de la forma que siempre quisiste</p>
		</div>
		
		<div class="img-10">
			<h3>Dietas</h3>
			<p>Tenemos variedades de dietas y recetas para ayudar a tu cuerpo a vivir de una manera sana y que ayude a ver mejores resultados.Tenemos 3 tipos de dietas eleji una y vivi potencid@</p>
		</div>
		<div class="tipos-dietas">
			<div class="caja1">
				<a href="mi_dieta_sub.php?opcion=1"><h2>Bajar de Peso</h2></a>
			</div>
			<div class="caja2">
				<a href="mi_dieta_sub.php?opcion=3"><h2>Aumentar Masa Muscular</h2></a>
			</div>
			<div class="caja3">
				<a href="mi_dieta_sub.php?opcion=2"><h2>Tonificar</h2></a>
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
	<script src="js/main.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/footer.js"></script>
</body>
</html>