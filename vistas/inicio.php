<?php 
session_start();
$_SESSION['datosUsuario']['id'];
if (isset($_SESSION['datosUsuario'])) {
?>
	<div class="d-flex" style="overflow-x: hidden">
		<?php include "menu.php"; ?>
		<div class="d-flex flex-column content">
			
			<?php include "header.php"; ?>

			<div class="container-fluid py-4 h-100">
				
				<?php include "breadcrum.php"; ?>
				<br>
				<h1 class="inicio-titulo text-center">SISTEMA DE GESTIÓN DE COMUNIDADES</h1>
				<p class="lead text-center">Universidad Nacional</p>
          		<p class="lead text-center"><b>Federico Villarreal</b></p>
				<hr>
				<p class="text-center"><img src="../img/background1.jpg" class="img-thumbnaild" /></p>

			</div>
		</div>

	</div>

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