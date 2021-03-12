<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		//ya hay un sesion activa
		header("Location: ../index.php?message=1");
	}
	else{
		if (isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['altura']) && isset($_GET['edad'])) {
			include_once("../php/conexion.php");
			$nombre = $_GET['nombre'];
			$correo = $_GET['correo'];
			$altura = $_GET['altura'];
			$edad = $_GET['edad'];
			$query = "SELECT * FROM registrados WHERE nombre='$nombre' AND correo='$correo' AND altura=$altura AND edad='$edad'";
			$consulta = $conexion -> query($query);
			if (($consulta->num_rows) > 0) {
				while ($datos = $consulta -> fetch_assoc()) {
					$update_id = $datos['id_registrado'];
					$update_nombre = $datos['nombre'];
					$update_correo = $datos['correo'];
					$update_pass = $datos['pass'];
					$update_peso = $datos['peso'];
					$update_altura = $datos['altura'];
					$update_edad = $datos['edad'];
					$update_metodo_entrenamiento = $datos['metodo_entrenamiento'];
					$query_c = "DELETE FROM registrados WHERE id_registrado=$update_id";
					$consulta_c = $conexion -> query($query_c);
					$update_fecha_sesion = date("Y-m-d");
					$query_c = "INSERT INTO `usuarios`(`nombre`, `correo`, `pass`, `peso`, `altura`, `edad`, `metodo_entrenamiento`, `fecha_sesion`) VALUES ('$update_nombre', '$update_correo', '$update_pass', $update_peso, $update_altura, '$update_edad', $update_metodo_entrenamiento, '$update_fecha_sesion')";
					$consulta_c = $conexion -> query($query_c);
					//se valido su mail
					header("Location: ../login.php?message=1");
				}
			}
		}
		else{
			//no hay datos
			header("Location: ../login.php?message=2");
		}
	}
?>
