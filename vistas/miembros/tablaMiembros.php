<?php

session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/MetodosUtiles.php";

$objCon    = new Conectar();
$conexion  = $objCon->conexion();
$idUsuario = $_SESSION['datosUsuario']['id'];
$sql       = "SELECT *
			    FROM t_miembros
		       WHERE id_user = '$idUsuario'";
$result = mysqli_query($conexion, $sql);

?>


<div class="table-responsive">
		<table id="tablaMiembrosDataTable" class="table-striped table-bordered
		dt-responsive nowrap" style="width:100%">
		<thead class="head-tabla" style="font-size: small;">
			<th class="no" style="">No.</th>
			<th>Comunidad</th>
			<th>No Doc</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Archivos</th>
			<th>Editar</th>
			<th>Estado</th>
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
				<?php echo $mostrar['no_doc']; ?>
			</td>
			<td>
				<?php echo $mostrar['nombre']; ?>
			</td>
			<td>
				<?php echo $mostrar['apellidos']; ?>
			</td>



			<?php 
				$idMiembro = $mostrar['id_miembro'];
				$sqlEstatus = "SELECT estatus
							     FROM t_miembros
						        WHERE id_miembro = '$idMiembro'";
				$resultEstatus = mysqli_query($conexion, $sqlEstatus);
				$ver = mysqli_fetch_array($resultEstatus);
				$estatus = $ver['estatus'];
				if ($estatus == 1) {
					$estado = 'fas fa-toggle-on';
					$estilo = 'color: blue;';
					$activo = 0; // debe llevar el valor contrario para desactivarlo
					$disabled = '';
				} else {
					$estado = 'fas fa-toggle-off';
					$estilo = 'color: red;';
					$activo = 1;
					$disabled = 'd-none';
				}
			?>
			<td>
				<span  data-toggle="modal" data-target="#agregarArchivosMiembro" class="btn btn-success btn-sm <?php echo $disabled; ?>" 
					onclick="obtenerIdMiembro('<?php echo $mostrar['id_miembro'] ?>')">
					<span class="far fa-file-alt"></span>
				</span>
			</td>

			<td>
				<span  data-toggle="modal" data-target="#modalActualizarMiembro" class="btn btn-warning btn-sm <?php echo $disabled; ?>" 
					onclick="obtenerDatosMiembro('<?php echo $mostrar['id_miembro'] ?>')">
					<span class="fas fa-user-edit"></span>
				</span>
			</td>


			<td>
				<span style="<?php echo $estilo; ?>font-size: 23px;cursor: pointer;" onclick="estatusMiembro('<?php echo $mostrar['id_miembro'] ?>','<?php echo $activo ?>')">
					<span class="<?php echo $estado; ?>"></span>
				</span>
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
	            	"lengthMenu": "Muestra _MENU_ registros por pag??na",
	            	"sZeroRecords":    "No se encontraron resultados",
	            	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	            	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
	            	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	            	"oPaginate": {
	            		"sFirst":    "Primero",
	            		"sLast":     "??ltimo",
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