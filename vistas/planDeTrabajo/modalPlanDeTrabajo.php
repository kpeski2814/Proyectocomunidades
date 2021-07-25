<!-- Modal -->
<div class="modal fade" id="agregarPlanDeTrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Plan de Trabajo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmPlanDeTrabajo" enctype="multipart/form-data" onsubmit="return agregarPlanDeTrabajo()">
					<input type="hidden" name="id_user" class="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM comunidad WHERE id_user = " . $_SESSION['datosUsuario']['id'];
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Comunidad *</label>
								    <select class="form-control" id="comunidad" name="comunidad" required readonly>
								    
								<?php
									while ($mostrar = mysqli_fetch_array($result)) {
								?>
								    <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['denominacion']; ?></option>
								<?php 
									}
								?>
								    </select>
								    <span class="fas fa-list"></span>
							</div>
			            </div>
			            <div class="col-lg-6">
		                    <div class="form-icon">
		                		<label>Año Creación *</label>
		                        <input type="text" class="form-control form-readonly date_campo" id="fecha" name="fecha" placeholder="Ingrese Año de creación" required autocomplete="off">
		                        <span class="fa fa-calendar"></span>
		                	</div>
		                </div>
			            <div class="col-lg-12 mt-4">
			            	<div class="form-control px-1 py-1">
			            		<input type="file" class="" id="plan_trabajo" name="plan_trabajo" required="">
			            	</div>
			            </div>


		                <div class="col-12 mt-2 text-center">
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarPlan">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>