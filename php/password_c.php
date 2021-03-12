<?php
	//inicia la variable $_SESSION
	session_start();
	//si no existe la sesión...
	if (!isset($_SESSION['usuario']) && isset($_POST['guardar'])) {
		//se destruyen las variables
		session_unset();
		//se destruye la sesión
		session_destroy();
		//redireccionar a index
		header("Location: ../index.php");
	}
	else{
		include_once("conexion.php");
	}
	$id = $_SESSION['data-id'];
	$old_pass = $_POST['old_pass'];
	$correo = $_SESSION['data-correo'];
	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['confirm_pass'];
	echo $old_pass;
	echo "<br><br>";
	echo $correo;
	echo "<br><br>";
	echo $new_pass;
	echo "<br><br>";
	echo $confirm_pass;
	echo "<br><br>";
	$query = "SELECT * FROM `usuarios` WHERE correo='$correo' AND pass='$old_pass'";
	$consulta = $conexion -> query($query);
	var_dump($query);
	echo "<br><br>";
	var_dump($consulta);
	if (($consulta->num_rows) > 0) {
		if ($new_pass == $confirm_pass) {
			$query = "UPDATE `usuarios` SET `pass`='$new_pass' WHERE id_usuario=$id";
			$consulta = $conexion -> query($query);
			header("Location: ../perfil.php?message=3");
		}
		else{
			header("Location: ../perfil.php?message=4");
		}
	}
	else{
		header("Location: ../perfil.php?message=2");
	}
?>