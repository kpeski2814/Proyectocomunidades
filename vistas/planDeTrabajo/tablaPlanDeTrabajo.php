<?php

session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/PlanDeTrabajo.php";
$obj = new PlanDeTrabajo();

$objCon    = new Conectar();
$conexion  = $objCon->conexion();

$idUsuario = $_SESSION['datosUsuario']['id'];
$sql       = "SELECT *
			    FROM t_plan_trabajo
		       WHERE id_user = '$idUsuario'";
$result = mysqli_query($conexion, $sql);

/*while ( $mostrar = mysqli_fetch_array($result)) {
	echo '12';
	echo '<br>';
}*/
?>


<div class="table-responsive">
		<table id="tablaMiembrosDataTable" class="table-striped table-bordered
		dt-responsive nowrap" style="width:100%">
		<thead class="head-tabla" style="font-size: small;">
			<th class="no" style="">No.</th>
			<th>Comunidad</th>
			<th>Año</th>
			<th>Tipo Extensión</th>
			<th>Descargar</th>
			<th>Visualizar</th>
		</thead>
		<tbody class="body-tabla" style="text-align: center; font-size: medium;">

		<?php
			while ($mostrar = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td class="text-center"></td>
			<td>
				<?php 
					$idComunidad = $mostrar['id_comunidad'];
					$sqlComunidad = "SELECT denominacion
								     FROM comunidad
							        WHERE id = '$idComunidad'";
					$resultComunidad = mysqli_query($conexion, $sqlComunidad);
					$verComunidad = mysqli_fetch_row($resultComunidad);
					print_r($verComunidad[0]);
				?>
			</td>
			<td>
				<?php
					$fechaAux = $mostrar['fecha'];
					$fecha = explode("-", $fechaAux);
					echo $fecha[0];
				?>
			</td>
			<td>
				PDF
			</td>
		
			<td>
				<?php 
					$idPlan = $mostrar['id_plan_trabajo'];
				    echo $obj->obtenerArchivo($idPlan,'descargar');
				?>
			</td>

			<td>
				<?php 
					echo $obj->obtenerArchivo($idPlan,'ver');
				?>
			</td>
		</tr>
		<?php }?>
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		var t = $('#tablaMiembrosDataTable').DataTable({
			//for responsive
			"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": 0
			} ],
			"order": [[ 1, 'desc' ]],
			//end for responsive

			dom: 'Bfrtip',
			buttons: [
	            //'copyHtml5',
	            //'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	            ],
	            "language": {
	            	"lengthMenu": "Muestra _MENU_ registros por pagína",
	            	"sZeroRecords":    "No se encontraron resultados",
	            	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	            	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
	            	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	            	"oPaginate": {
	            		"sFirst":    "Primero",
	            		"sLast":     "Último",
	            		"sNext":     "Siguiente",
	            		"sPrevious": "Anterior"
	            	},
	            	"search": "Buscar:"
	            }
	        });
	    //for responsive
	    t.on( 'order.dt search.dt', function () {
	    	t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	    		cell.innerHTML = i+1;
	    	} );
	    } ).draw();
	});
</script>