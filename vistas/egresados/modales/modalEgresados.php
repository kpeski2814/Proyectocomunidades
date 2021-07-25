<!-- Modal -->
<div class="modal fade" id="agregarNuevoEgresado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Egresado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmEgresado" method="POST" onsubmit="return agregarEgresado()">
					<input type="hidden" name="cod_reg" class="cod_reg">
					<input type="hidden" name="id_user" class="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dni" id="dniEg" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombre" id="nombreEg" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidos" id="apellidosEg" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefono" id="telefonoEg" placeholder="Ingrese teléfono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correo" id="correoEg" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Facultad *</label>
				                    <select name="facultad" class="form-control" id="facultadEg" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">facultad de administración</option>
	                        			<option value="2">facultad de arquitectura y urbanismo</option>
	                        			<option value="3">facultad de ciencias económicas</option>
	                        			<option value="4">facultad de ciencias financieras y contables</option>
	                        			<option value="5">facultad de ciencias naturales y matemática</option>
	                        			<option value="6">facultad de ciencias sociales</option>
	                        			<option value="7">facultad de derecho y ciencia política</option>
	                        			<option value="8">facultad de educación</option>
	                        			<option value="9">facultad de humanidades</option>
	                        			<option value="10">facultad de ingeniería civil</option>
	                        			<option value="11">facultad de ingeniería electrónica e informática</option>
	                        			<option value="12">facultad de ingeniería geográfica y ambiental</option>
	                        			<option value="13">facultad de ingeniería industrial y sistemas</option>
	                        			<option value="14">facultad de medicina</option>
	                        			<option value="15">facultad de odontología</option>
	                        			<option value="16">facultad de oceanografía, pesquera y ciencias alimentarias</option>
	                        			<option value="17">facultad de psicología</option>
	                        			<option value="18">facultad de tecnología medica</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            


		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarEgresado">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>