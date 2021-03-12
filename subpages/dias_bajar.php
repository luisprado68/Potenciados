<div class="midieta">
	<section>
		<div class="img-10">
			<h3>Bajar de Peso</h3>
			<p>Un plan combiando cardio y ejercicios para bajar de peso.
			Este plan de entrenamiento se caracteriza por una
			 combinación eficaz entre elementos de fuerza y resistencia.
			</p>
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
				$query = "SELECT * FROM `ejercicios` WHERE id_objetivo=1";
				$consulta = $conexion->query($query);
				if (($consulta->num_rows) > 0) {
					
				echo "<h1>Entrenamiento Semanal</h1>";
				echo "<div>";
					while ($datos = $consulta -> fetch_assoc()) {
				?>
				
					<table border="1" >
						<thead>
							<tr>
								<th colspan="3">Dia <?php echo $datos['dia']; ?></th>
							</tr>
						</thead>
						<tbody>

								<tr class="sub">
									<td>Series</td>
									<td>Repeticiones</td>
									<td>Ejercicio</td>
								</tr>
								<tr class="demas">
									<td><?php echo $datos['serie_1']; ?></td>
									<td><?php echo $datos['repe_1']; ?></td>
									<td><?php echo $datos['ejercicio_1']; ?></td>
								</tr>
								<tr class="demas">
									<td><?php echo $datos['serie_2']; ?></td>
									<td><?php echo $datos['repe_2']; ?></td>
									<td><?php echo $datos['ejercicio_2']; ?></td>
								</tr>
								<tr class="demas">
									<td><?php echo $datos['serie_3']; ?></td>
									<td><?php echo $datos['repe_3']; ?></td>
									<td><?php echo $datos['ejercicio_3']; ?></td>
								</tr>
								<tr class="demas">
									<td><?php echo $datos['serie_4']; ?></td>
									<td><?php echo $datos['repe_4']; ?></td>
									<td><?php echo $datos['ejercicio_4']; ?></td>
								</tr>
								<tr class="demas">
									<td><?php echo $datos['serie_5']; ?></td>
									<td><?php echo $datos['repe_5']; ?></td>
									<td><?php echo $datos['ejercicio_5']; ?></td>
								</tr>
								<?php if ($datos['serie_6'] != ""){ ?>
								<tr class="demas">
									<td><?php echo $datos['serie_6']; ?></td>
									<td><?php echo $datos['repe_6']; ?></td>
									<td><?php echo $datos['ejercicio_6']; ?></td>
								</tr>
								<?php
								}
								?>
								<?php if ($datos['serie_7'] != ""){ ?>
								<tr class="demas">
									<td><?php echo $datos['serie_7']; ?></td>
									<td><?php echo $datos['repe_7']; ?></td>
									<td><?php echo $datos['ejercicio_7']; ?></td>
								</tr>
								<?php
								}
								?>
								<?php if ($datos['serie_8'] != ""){ ?>
								<tr class="demas">
									<td><?php echo $datos['serie_8']; ?></td>
									<td><?php echo $datos['repe_8']; ?></td>
									<td><?php echo $datos['ejercicio_8']; ?></td>
								</tr>
								<?php
								}
								?>
								<?php if ($datos['serie_9'] != ""){ ?>
								<tr class="demas">
									<td><?php echo $datos['serie_9']; ?></td>
									<td><?php echo $datos['repe_9']; ?></td>
									<td><?php echo $datos['ejercicio_9']; ?></td>
								</tr>
								<?php
								}
								?>
						</tbody>
						
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
			</div>
	</section>
</div>