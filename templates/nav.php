<input class="input" type="checkbox" name="" id="btn-menu">
<label for="btn-menu" class="icon-menu"></label>
        <nav class="menu">
            
            <ul>
                <li><span><a href="index.php"><img src="imagenes/logo.png" class="logo" id="logo-link"></a></span></li>
                <li class="submenu"><a href="#">Gimnasio<span class="icon-down-open"></span></a>
                        <ul>
                            <li><a href="index_mi_ejercicio.php">Mi Rutina</a></li>
                            <li><a href="ejercicios.php">Plan Entrenamiento</a></li>
                        </ul>
                </li>
                <li class="submenu"><a href="#">Dietas<span class="icon-down-open"></span></a>
                        <ul>
                            <li><a href="index_mi_dieta.php">Mi Dieta</a></li>
                            <li><a href="mi_dieta.php">Plan Nutricional</a></li>
                        </ul>
                </li>
                <li><a href="contacto.php">Contactos</a></li>
                <?php
			if (isset($_SESSION['usuario'])) {
				//Si existe una sesion da la opción de cerrar la sesion e imprime el nombre del usuario.
									//imprimimos la variable usuario que contiene el nombre.
			?> 	<li><a href="perfil.php"><?php echo $_SESSION['usuario']; ?></a></li>
				<li><a href="login/process/logout.php">Cerrar Sesión</a></li><?php
			}
			else{
				//si no hay una sesión, aparaece el link para logearte
			?><li><a href="./registro.php">Registarse</a></li>
			  <li><a href="./login.php">Acceder</a></li><?php
			}
		?>
                
            </ul>

        </nav>