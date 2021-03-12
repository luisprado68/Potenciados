<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<td>ID</td>
			<td>Usuario</td>
			<td>Validar</td>
		</tr>
		<?php
			include_once("conexion.php");
			$query = "SELECT * FROM registrados";
			$consulta = $conexion -> query($query);
			if (($consulta->num_rows) > 0) {
				while ($datos = $consulta -> fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$datos['id_registrado']."</td>";
					echo "<td>".$datos['nombre']."</td>";
					echo "<td><a href='../login/validar_mail.php?nombre=".$datos['nombre']."&correo=".$datos['correo']."&altura=".$datos['altura']."&edad=".$datos['edad']."'>VALIDAR</a></td>";
					echo "</tr>";
				}
			}
			else{
				echo "<tr><td colspan=3>No hay registros</td></tr>";
			}
		?>
	</table>
</body>
</html>
<?php
	
?>