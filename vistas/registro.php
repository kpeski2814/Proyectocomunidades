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
				

				<!-- contenido -->
				<div class="row menu-registro d-flex justify-content-center">
                    <div class="mx-1 mt-3 menu-link" id="btn-comunidad">
                      <span>COMUNIDAD</span>
                    </div>
                    <div class="mx-1 mt-3 menu-link" id="btn-coordinador">
                      <span>COORDINADOR</span>
                    </div>
                    <div class="mx-1 mt-3 menu-link" id="btn-investigador">
                      <span>INVESTIGADOR</span>
                    </div>
                    <div class="mx-1 mt-3 menu-link" id="btn-miembro">
                      <span>MIEMBRO</span>
                    </div>
                </div>
				<div id="comunidad-wrap">
					<div class="col-sm-4">
						<h1 style="font-size: 30px;"><b>Registro Comunidades</b></h1>
						<span class="btn btn-primary comunidadForm" data-toggle="modal" data-target="#agregarNuevaComunidad">
							<span class="fas fa-plus-circle"></span> Agregar nueva comunidad
						</span>
					</div>
					<hr>
					<div class="col-sm-12 t_usuarios p-0">
						<div id="tablaComunidades"></div>
					</div>
				</div>

				<div id="coordinador-wrap">
					<div class="col-sm-4">
						<h1 style="font-size: 30px;"><b>Registro Coordinador</b></h1>
						<?php 
							if($existeComunidad) { 
						?>
								<span class="btn btn-primary coordinadorForm" data-toggle="modal" data-target="#agregarNuevoCoordinador">
									<span class="fas fa-plus-circle"></span> Agregar nuevo coordinador
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
						<div id="tablaCoordinador"></div>
					</div>
				</div>

				<div id="investigador-wrap">
					<div class="col-sm-4">
						<h1 style="font-size: 30px;"><b>Registro Investigador</b></h1>
						<?php 
							if($existeComunidad) { 
						?>
						<span class="btn btn-primary investigadorForm" data-toggle="modal" data-target="#agregarNuevoInvestigador">
							<span class="fas fa-plus-circle"></span> Agregar nuevo Investigador
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
						<div id="tablaInvestigador"></div>
					</div>
				</div>
				<div id="miembros-wrap">
					<div class="col-sm-4">
						<h1 style="font-size: 30px;"><b>Registro Miembro</b></h1>

						<?php 
							if($existeComunidad) { 
						?>
						<span class="btn btn-primary miembroForm" data-toggle="modal" data-target="#agregarNuevoMiembro">
							<span class="fas fa-plus-circle"></span> Agregar Nuevo Miembro
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
						<div id="tablaMiembros"></div>
					</div>
				</div>
				<!-- end contenido -->

				<!-- modales Comunidades -->
				<?php include "comunidades/modales/modalComunidad.php"; ?>
				<?php include "comunidades/modales/modalActualizarComunidad.php"; ?>
				<?php include "comunidades/modales/modalArchivos.php"; ?>
				<!-- end modales Comunidades -->

				<!-- modales coordinador -->
				<?php include "coordinador/modales/modalCoordinador.php"; ?>
				<?php include "coordinador/modales/modalActualizarCoordinador.php"; ?>
				<?php include "coordinador/modales/modalArchivosCoordinador.php"; ?>
				<!-- end modales coordinador -->

				<!-- modales investigador -->
				<?php include "investigador/modales/modalInvestigador.php"; ?>
				<?php include "investigador/modales/modalActualizarInvestigador.php"; ?>
				<?php include "investigador/modales/modalArchivosInvestigador.php"; ?>
				<!-- end modales investigador -->

				<!-- modales estudiantes -->
				<?php //include "estudiantes/modales/modalEstudiantes.php"; ?>
				<?php //include "estudiantes/modales/modalActualizarEstudiante.php"; ?>
				<?php //include "estudiantes/modales/modalArchivosEstudiante.php"; ?>
				<!-- end modales estudiantes -->

				<!-- modales egresados -->
				<?php //include "egresados/modales/modalEgresados.php"; ?>
				<?php //include "egresados/modales/modalActualizarEgresados.php"; ?>
				<?php //include "egresados/modales/modalArchivosEgresados.php"; ?>
				<!-- end modales egresados -->

				<!-- modales miembros -->
				<?php include "miembros/modales/modalMiembros.php"; ?>
				<?php include "miembros/modales/modalActualizarMiembros.php"; ?>
				<?php include "miembros/modales/modalArchivosMiembros.php"; ?>
				<!-- end modales miembros -->


			</div>
		</div>

	</div>
	<?php
	include "footer.php"; 
	?>

	<script src="../js/comunidades.js"></script>
	<script src="../js/coordinador.js"></script>
	<script src="../js/investigador.js"></script>
	<!-- <script src="../js/estudiantes.js"></script> -->
	<!-- <script src="../js/egresados.js"></script> -->
	<script src="../js/miembros.js"></script>
	
	<?php 
} else {
	header("location:../index.php");
}
?>