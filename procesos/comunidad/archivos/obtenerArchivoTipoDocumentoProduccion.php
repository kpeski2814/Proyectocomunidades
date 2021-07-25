<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['id'];
$tipoDocumentoProduccion = 1;
$resultado = $obj->obtenerArchivoTipoDocumentoProduccion($id,$tipoDocumentoProduccion); //creo mi nueva instancia
//print_r($resultado);  
 ?>

 <table id="tablaArchivosProduccion" class="table-striped table-bordered dt-responsive" style="width:100%">
	<thead class="head-tabla" style="font-size: small;">
		<th class="no" style="">No.</th>
		<th>Archivo</th>
		<th>Tipo</th>
		<th>URL</th>
		<th>Descarga</th>
		<th>Eliminar</th>
	</thead>
	<tbody class="body-tabla" style="font-size: medium;">
		<?php 
			foreach ($resultado as $key => $value) { 
		?>
				<tr>
					<td class="text-center"></td>
					<td class="pl-2" style="padding: 16px;"><?php echo $value['nombre_original']; ?></td>
					<td class="pl-2">
						<?php 
							if ($value['tipo'] == 1) {
								echo 'Articulo';
							} else if ($value['tipo'] == 2) {
								echo 'Revista';
							} else if ($value['tipo'] == 3) {
								echo 'Libros';
							} else if ($value['tipo'] == 4) {
								echo 'Capítulos de libros';
							} else {
								echo '--';
							}
						?>
					</td>
					<td class="pl-2">
						<a href=" <?php echo $value['url']; ?> " target="_blank" style="text-overflow: ellipsis;"><?php echo $value['url']; ?></a>
					</td>
					<td class="text-center">
						<a href="../archivos/comunidad/<?php echo $value['nombre']; ?>" target="_blank">
		                	<i class="fas fa-file-alt" style="font-size:20px;color:#138496;"></i>
		              	</a>
					</td>
					<td class="text-center">
						<i class="fas fa-trash-alt" style="font-size:18px;color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoTipoDocumentoProduccion('<?php echo $value['id_archivos']; ?>')">
		              	</i>
					</td>
				</tr>
		<?php 
			}
		?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		var t = $('#tablaArchivosProduccion').DataTable({
			//for responsive
			"searching": false,
			"pageLength": 5,
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