<?php

session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/MetodosUtiles.php";

$objCon    = new Conectar();
$conexion  = $objCon->conexion();
$sql       = "SELECT
                    id,
                    nombre, 
                    apellido, 
                    username, 
                    rol
                FROM usuarios";
$result = mysqli_query($conexion, $sql);

?>


<div class="table-responsive">
		<table id="tablaMiembrosDataTable" class="table-striped table-bordered
		dt-responsive nowrap" style="width:100%">
		<thead class="head-tabla" style="font-size: small;">
			<th class="no" style="">No.</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Usuario</th>
            <th>Rol</th>
			<th>Inf. Capturada</th>
			<th>Eliminar</th>
		</thead>
		<tbody class="body-tabla" style="text-align: center; font-size: medium;">

		<?php
            $contador = 0;
			while ($mostrar = mysqli_fetch_array($result)) {
                $contador++;
                $idUsuario = $mostrar['id'];
		?>
		<tr>
			<td class="text-center"><?php echo $contador ?></td>
			<td>
				<?php echo $mostrar['nombre'] ?>
			</td>
			<td>
                <?php echo $mostrar['apellido'] ?>
			</td>
			<td>
                <?php echo $mostrar['username'] ?>
			</td>
			<td>
                <?php echo $mostrar['rol'] ?>
			</td>
			<td>
				<span class="btn btn-success btn-sm" data-toggle="modal" 
						data-target="#verInformacionUsuarioModal" 
						onclick="obtenerDatosCapturadosPorUsuario('<?php echo $idUsuario; ?>')">
					<span class="fas fa-eye"></span> 
				</span>
			</td>
            <td>
                <span  class="btn btn-danger btn-sm" onclick="eliminarUsuario('<?php echo $idUsuario; ?>')">
					<span class="fas fa-trash-alt"></span>
				</span>
            </td>
		</tr>
		<?php }?>
		</tbody>
	</table>
</div>
