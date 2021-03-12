<div class="midieta">
	<section>
		<div class="img-18">
			<h3>Aumentar Masa Muscular</h3>
			<p>Una dieta que aporta un extra a nivel calórico, nuestras necesidades energéticas
			 estarán aumentadas ya que se requiere de más energía para fomentar la síntesis proteica.</p>
			<?php
			if (!isset($_SESSION['usuario'])) {
				//Si existe una sesion da la opción de cerrar la sesion e imprime el nombre del usuario.
									//imprimimos la variable usuario que contiene el nombre.
			?> 	<div class="button">
				<a href="./login.php" id="empezaAhora">EMPEZÁ AHORA!</a>
				</div>
	<?php   }
		
		?>
			
		</div>
		
			<?php
			
				if (isset($_SESSION['usuario'])) {
					echo"<div>";
	
					include_once("php/conexion.php");
					$query = "SELECT * FROM `dietas` WHERE id_objetivo=2";
					$consulta = $conexion->query($query);
					if (($consulta->num_rows) > 0) {
					echo "<h1>Dieta Semanal</h1>";
					echo "<div>";
						while ($datos = $consulta -> fetch_assoc()) {
					?>
						<table border="1" >
							<thead>
								<tr>
									<th colspan="2">Dia <?php echo $datos['dia']; ?></th>
								</tr>
							</thead>
								<tr>
									<td class="sub">Hora</td>
									<td class="sub">Comida</td>
								</tr>
							
							
							<tr>
								<td class="demas2">Desayuno</td>
								<td class="demas"><?php echo $datos['comida_1']; ?></td>
							</tr>
							<tr>
								<td class="demas2">Almuerzo</td>
								<td class="demas"><?php echo $datos['comida_2']; ?></td>
							</tr>
							<tr>
								<td class="demas2">Merienda</td>
								<td class="demas"><?php echo $datos['comida_3']; ?></td>
							</tr>
							<tr>
								<td class="demas2">Cena</td>
								<td class="demas"><?php echo $datos['comida_4']; ?></td>
							</tr>
						</table>
					<?php
						}
					}
					else{
						echo "<p>No hay dietas debes registrarte</p>";
					}
				}
				echo "</div>";
				?>
		
	</section>
</div>