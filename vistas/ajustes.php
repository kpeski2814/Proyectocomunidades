<?php 
session_start();
if (isset($_SESSION['datosUsuario'])) {
?>
	<div class="d-flex" style="overflow-x: hidden">
		<?php include "menu.php"; ?>
		<div class="d-flex flex-column content">
			
			<?php include "header.php"; ?>

			<div class="container-fluid py-4 h-100">
				
				<?php include "breadcrum.php"; ?>
				<br>
				<h1 class="inicio-titulo">AJUSTES TEMA</h1>
				<br>
				
				<div class="d-flex">
					<div class="btn-temaDefault text-center mr-4" style="cursor: pointer;">
						<img src="../img/temaDefault.jpg" alt="" width="100" style=" border: solid thin #2e2e2e;">
						<p class="mt-1"><b>Default</b></p>
					</div>
					<div class="btn-temaUno text-center" style="cursor: pointer;">
						<img src="../img/temaUno.jpg" alt="" width="100" style=" border: solid thin #2e2e2e;">
						<p class="mt-1"><b>Tema Uno</b></p>
					</div>
					<div class="btn-temaDos text-center mx-4" style="cursor: pointer;">
						<img src="../img/temaDos.jpg" alt="" width="100" 
							style=" border: solid thin #2e2e2e;">
						<p class="mt-1"><b>Tema Dos</b></p>
					</div>
					<div class="btn-temaTres text-center" style="cursor: pointer;">
						<img src="../img/temaTres.jpg" alt="" width="100" 
							style=" border: solid thin #2e2e2e;">
						<p class="mt-1"><b>Tema Tres</b></p>
					</div>
				</div>
				
			</div>
		</div>

	</div>
<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>
