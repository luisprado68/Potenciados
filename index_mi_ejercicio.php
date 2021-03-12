<?php
	//inicia la variable $_SESSION
	session_start();
	//si no existe la sesión...
	if (!isset($_SESSION['usuario'])) {
		//se destruyen las variables
		session_unset();
		//se destruye la sesión
		session_destroy();
		header("Location: index.php");
	}
	else{
		$me = $_SESSION['data-m_e'];
		echo $me;
		switch ($me) {
			case 1:
				header("Location: ejercicios_sub.php?opcion=1");
				break;
			case 2:
				header("Location: ejercicios_sub.php?opcion=2");
				break;
			case 3:
				header("Location: ejercicios_sub.php?opcion=3");
				break;
		}
	}
?>