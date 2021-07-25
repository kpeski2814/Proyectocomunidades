<?php

session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/MetodosUtiles.php";

$objCon    = new Conectar();
$conexion  = $objCon->conexion();
$idUsuario = $_SESSION['datosUsuario']['id'];
$sql       = "SELECT *
			    FROM t_estudiantes
		       WHERE id_user = '$idUsuario'";
$result = mysqli_query($conexion, $sql);

?>


<div class="table-responsive">
		<table id="tablaEstudiantesDataTable" class="table-striped table-bordered
		dt-responsive nowrap" style="width:100%">
		<thead class="head-tabla" style="font-size: small;">
			<th class="no" style="">No.</th>
			<th>Dni</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Archivos</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		<tbody class="body-tabla" style="text-align: center; font-size: medium;">

		<?php
			while ($mostrar = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td class="text-center"></td>
			<td>
				<?php echo $mostrar['dni']; ?>
			</td>
			<td>
				<?php echo $mostrar['nombre']; ?>
			</td>
			<td>
				<?php echo $mostrar['apellidos']; ?>
			</td>

			<td>
				<span  data-toggle="modal" data-target="#agregarArchivosEstudiante" class="btn btn-success btn-sm" 
					onclick="obtenerIdEstudiante('<?php echo $mostrar['id_estudiante'] ?>')">
					<span class="far fa-file-alt"></span>
				</span>
			</td>

			<td>
				<span  data-toggle="modal" data-target="#modalActualizarEstudiante" class="btn btn-warning btn-sm" 
					onclick="obtenerDatosEstudiante('<?php echo $mostrar['id_estudiante'] ?>')">
					<span class="fas fa-user-edit"></span>
				</span>
			</td>


			<td>
				<span class="btn btn-danger btn-sm" onclick="eliminarUsuario('<?php echo $mostrar['id_estudiante'] ?>')">
					<span class="fas fa-user-times"></span>
				</span>
			</td>
		</tr>
		<?php }?>
		</tbody>
	</table>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		var t = $('#tablaEstudiantesDataTable').DataTable({
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