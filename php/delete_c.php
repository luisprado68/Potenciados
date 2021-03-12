<?php
	//inicia la variable $_SESSION
	session_start();
	//si no existe la sesión...
	if (!isset($_SESSION['usuario']) && isset($_GET['id'])) {
		//se destruyen las variables
		session_unset();
		//se destruye la sesión
		session_destroy();
		//redireccionar a index
		header("Location: ../index.php");
	}
	else{
		include_once("../php/conexion.php");
	}
	
	$id = $_GET['id'];
	$query = "DELETE FROM `usuarios` WHERE id_usuario=$id";
	$consulta = $conexion -> query($query);
	echo "<script>alert('Usuario eliminado');</script>";
	header("Location: session_destroy.php");
?>
