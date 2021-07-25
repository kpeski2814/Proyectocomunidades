<?php 
session_start();
$_SESSION['datosUsuario']['id'];


if (isset($_SESSION['datosUsuario'])) {

?>
	<div class="d-flex" style="overflow-x: hidden">
		<?php include "menu.php"; ?>
		<div class="d-flex flex-column content">
			
			<?php include "header.php"; ?>

			<div class="container-fluid py-4 h-100 usuarios-form">
				
				<?php include "breadcrum.php"; ?>
				<br>
				
				<div id="planDeTrabajo-wrap">
					<div class="col-sm-4">
						<h1 style="font-size: 30px;"><b>Registro de usuarios</b></h1>
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarNuevoUsuarioModal">
							<span class="fas fa-plus-circle"></span> Agregar Nuevo Usuario
						</span>
					</div>
					<hr>
					<div class="col-sm-12 t_usuarios p-0">
						<div id="tablaDeUsuarios"></div>
					</div>
				</div>

				
				<?php 
					include "usuarios/modales/agregar.php";
					include "usuarios/modales/informacionUsuario.php"; 
				?>


			</div>
		</div>

	</div>

	</div>
	<?php
	include "footer.php"; 
	?>
    <script src="../js/usuarios.js"></script>
	
	<?php 
    } else {
	    header("location:../index.php");
    }
?>