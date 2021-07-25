<div class="menu-wrap container">
	<p class="mt-3 link menu-name"><b>Menú</b></p>
	<p class="mt-3 link menu-name-cerrado"><b>M</b></p>
	<hr>

	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link link" href="inicio.php"> 
				<span class="fas fa-home icono-menu"></span>
				<span class="navname">Inicio</span>
				<span class="sr-only">(current)</span>
			</a>
		</li>
		<?php 
			if($_SESSION['datosUsuario']['rol'] == "administrador") {
		?>
			<li class="nav-item">
				<a class="nav-link link" href="usuarios.php"> 
					<span class="far fa-folder-open icono-menu"></span>
					<span class="navname">Usuarios</span>
				</a>
			</li>
		<?php 
			} else if ($_SESSION['datosUsuario']['rol'] == "coordinador") {
		?>
			<li class="nav-item">
				<a class="nav-link link" href="registro.php"> 
					<span class="far fa-folder-open icono-menu"></span>
					<span class="navname">Registro</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link link" href="planDeTrabajo.php"> 
					<span class="far fa-list-alt icono-menu"></span>
					<span class="navname">Plan de Trabajo</span>
				</a>
			</li>
		<?php 
			}
		?>
	</ul>
</div>