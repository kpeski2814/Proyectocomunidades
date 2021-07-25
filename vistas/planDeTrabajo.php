<?php 
session_start();
require_once "../clases/Conexion.php";
require_once "../clases/MetodosUtiles.php";
$objCon    = new Conectar();
$conexion  = $objCon->conexion();
$idUsuario = $_SESSION['datosUsuario']['id'];
if (isset($_SESSION['datosUsuario']) && $_SESSION['datosUsuario']['rol'] == 'coordinador') {

		$MetodosUtiles = new MetodosUtiles();
		$existeComunidad = $MetodosUtiles->buscarComunidadDeUsuario($conexion, $idUsuario);
	
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
						<h1 style="font-size: 30px;"><b>Plan de Trabajo</b></h1>
						<?php 
							if($existeComunidad) { 
						?>
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarPlanDeTrabajo">
							<span class="fas fa-plus-circle"></span> Agregar Nuevo Plan de Trabajo
						</span>

						<?php

							} else {
						?>
							<div class="alert alert-primary" role="alert">
								No existe ninguna comunidad agregada, por favor agrega una!
							</div>
						<?php
							}
						?>
					</div>
					<hr>
					<div class="col-sm-12 t_usuarios p-0">
						<div id="tablaPlanDeTrabajo"></div>
					</div>
				</div>

				
				<?php include "planDeTrabajo/modalPlanDeTrabajo.php"; ?>


			</div>
		</div>

	</div>
	<?php
	include "footer.php"; 
	?>

	<script src="../js/planDeTrabajo.js"></script>

	
	<?php 
} else {
	header("location:../index.php");
}
?>