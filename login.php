<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="./imagenes/favicon.ico">
	<link rel="stylesheet" href="./css/fontello.css">
	<link rel="stylesheet" href="./css/fonts.css">
	<link rel="stylesheet" href="./css/gral-rules.css">
	<link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/toast.css">
</head>
<body>
<?php

	session_start();
	include_once('./login/logueo.html');

	if (isset($_SESSION['usuario'])) {
		echo "YA HAY USUARIO";
	}
	else{
		if (isset($_POST['inicio'])) {
			include_once("./php/conexion.php");
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$fecha_sesion = date("Y-m-d");
			$query = "UPDATE usuarios SET fecha_sesion='$fecha_sesion'";
			$consulta = $conexion -> query($query);
			$query = "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$password'";
			$consulta = $conexion -> query($query);
			if (($consulta->num_rows) == 1) {
				while ($datos = $consulta->fetch_assoc()) {
					$_SESSION['usuario'] = $datos['nombre'];
					$_SESSION['data-id'] = $datos['id_usuario'];
					$_SESSION['data-correo'] = $datos['correo'];
					$_SESSION['data-peso'] = $datos['peso'];
					$_SESSION['data-altura'] = $datos['altura'];
					$_SESSION['data-edad'] = $datos['edad'];
					$_SESSION['data-m_e'] = $datos['metodo_entrenamiento'];
					 header("Location: ./index.php");
					// echo '<script>window.location.replace("http://localhost/potenciados%20-%20copia/index.php");</script>';
					// echo '<script>window.location.href = "http://localhost/potenciados%20-%20copia/index.php";</script>';
				}
			}
			else{
			
				echo '<div class="toast toast--visible toast--error">
				<span class="msg">Usuario o contrseña incorrectos.</span>
				<span class="cerrar-btn " id="cierre-login">
				<span class="icon-cancel"></span>
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
		<script src="./js/toast.js"></script>
		<script src="./js/footer.js"></script>
</body>
</html>