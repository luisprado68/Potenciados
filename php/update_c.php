<?php
	//inicia la variable $_SESSION
	session_start();
	//si no existe la sesión...
	if (!isset($_SESSION['usuario']) && isset($_POST['id']) && isset($_POST['guardar'])) {
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
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$edad = $_POST['edad'];
	$altura = $_POST['altura'];
	$peso = $_POST['peso'];
	$m_e = $_POST['m_e'];
	//actualizamos todos los datos cuando el id sea igual al id que trajo el formulario
	$query = "UPDATE `usuarios` SET `nombre`='$nombre',`correo`='$correo',`peso`='$peso',`altura`='$altura',`edad`='$edad',`metodo_entrenamiento`='$m_e' WHERE id_usuario=$id";
	$consulta = $conexion -> query($query);
	var_dump($query);
	echo "<br><br>";
	var_dump($consulta);
	//actualiza los datos de la sesión
	$_SESSION['usuario'] = $nombre;
	$_SESSION['data-correo'] = $correo;
	$_SESSION['data-edad'] = $edad;
	$_SESSION['data-altura'] = $altura;
	$_SESSION['data-peso'] = $peso;
	$_SESSION['data-m_e'] = $m_e;
	header("Location: ../perfil.php");
?>