<section>
	<?php
		//si se apreto editar muestra un formulario para cambiar los datos
		if (isset($_GET['editar_datos'])) {
	?>
	<div class="contenedor">
	<div class="editar">
	<form action="php/update_c.php"method="POST">
		<a href="perfil.php">CANCELAR</a>
		<br>
		<?php
			//Copiamos los datos de la URL
			$id = $_GET['id'];
			$nombre = $_GET['nombre'];
			$correo = $_GET['correo'];
			$edad = $_GET['edad'];
			$altura = $_GET['altura'];
			$peso = $_GET['peso'];
			$m_e = $_GET['m_e'];
		?>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="text" name="nombre" value="<?php echo $nombre ?>">
		<input type="email" name="correo" value="<?php echo $correo ?>">
		<input type="date" name="edad" value="<?php echo $edad ?>">
		<input type="number" name="altura" value="<?php echo $altura ?>">
		<input type="number" name="peso" value="<?php echo $peso ?>">
		<select name="m_e">
			<?php
				switch ($m_e) {
					case 1:
					echo "<option value=1 selected>Bajar de peso<option>";
					echo "<option value=2>Tonificar y cardio<option>";
					echo "<option value=3>Aumentar masa muscular<option>";
					break;
				case 2:
					echo "<option value=1>Bajar de peso<option>";
					echo "<option value=2 selected>Tonificar y cardio<option>";
					echo "<option value=3>Aumentar masa muscular<option>";
					break;
				case 3:
					echo "<option value=1>Bajar de peso<option>";
					echo "<option value=2>Tonificar y cardio<option>";
					echo "<option value=3 selected>Aumentar masa muscular<option>";
					break;
				}
			?>
		</select>
		<input type="submit" name="guardar" value="ACTUALIZAR">
		<!--BORRAR BR-->
	</form>
	</div>
	</div>					<!--BORRAR STYLE!!!!!!!!!!!!-->
	
	
	<?php
		}
		else if (isset($_GET['cambiar_contrasena'])) {
	?>
	<div class="contenedor">
		<div class="cambiar">
		<a href="perfil.php">CANCELAR</a>
		<form action="php/password_c.php" style="text-align: center;" method="POST">
		<input type="password" name="old_pass" placeholder="   Contraseña Anterior..">
		<input type="password" name="new_pass" placeholder="   Nueva Contraseña..">
		<input type="password" name="confirm_pass" placeholder="   Confirmar Contraseña..">
		<input type="submit" name="guardar" value="ACTUALIZAR">
	</form>
		</div>
	</div>
	

	<?php
		}
		//si no se apreto editar, muestra normalmente
		else{
	?>
	
	<div class="contenedor">
		<div class="perfil">
		<h2>Mi Perfil</h2>
		<p>Nombre: <?php echo $_SESSION['usuario']; ?></p>
		<p>Correo: <?php echo $_SESSION['data-correo']; ?></p>
		<p>Fecha de nacimiento: <?php
			$edad_parcial = $_SESSION['data-edad'];
			$newDate = date("d/m/Y", strtotime($edad_parcial));
			// $edad_parcial = NULL; //Null para que ocupe menos espacio en RAM
			echo $newDate; ?></p>
		<p>Edad: <?php
			$hoy = new DateTime();
			$newDate = date("Y/m/d", strtotime($edad_parcial));
			// 
			$fecha_nacimiento = date("Y/m/d", strtotime($newDate));
			$fecha_nacimiento = new DateTime($fecha_nacimiento);
			//mostramos la diferencia en años
			$edad = $hoy->diff($fecha_nacimiento);
			echo $edad->y;
			$fecha_actual = NULL;
			$newDate = NULL;
			$edad_parcial = NULL;
		?> Años</p>
		<p>Altura: <?php echo $_SESSION['data-altura']; ?> cm</p>
		<p>Peso: <?php echo $_SESSION['data-peso']; ?> Kg</p>
		<p>Método de entrenamiento: <?php
			$newDate = $_SESSION['data-m_e'];
			switch ($newDate) {
				case 1:
					$newDate = "Bajar de peso";
					break;
				case 2:
					$newDate = "Tonificar y cardio";
					break;
				case 3:
					$newDate = "Aumentar masa muscular";
					break;
			}
			echo $newDate;
			$newDate = NULL;
		?></p>
		</div>
		<div class="perfil-botones">
		<a href="php/delete_c.php?id=<?php echo $_SESSION['data-id']; ?>" class="boton_personalizado" onclick=" return Confirmar()">Eliminar cuenta</a>
		<a href="perfil.php?editar_datos=true&id=<?php echo $_SESSION['data-id']; ?>&nombre=<?php echo $_SESSION['usuario']; ?>&correo=<?php echo $_SESSION['data-correo']; ?>&edad=<?php echo $_SESSION['data-edad']; ?>&altura=<?php echo $_SESSION['data-altura']; ?>&peso=<?php echo $_SESSION['data-peso']; ?>&m_e=<?php echo $_SESSION['data-m_e']; ?>" class="boton_personalizado">Editar datos</a>
		<a href="perfil.php?cambiar_contrasena=true" class="boton_personalizado">Cambiar contraseña</a>
		</div>
	</div>
	<?php
		}
	?>
</section>