<!-- Modal -->
<div class="modal fade" id="agregarNuevoMiembro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Miembro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmMiembro" method="POST" onsubmit="return agregarMiembro()">
					<input type="hidden" name="cod_reg" class="cod_reg">
					<input type="hidden" name="id_user" class="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
				    	<div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Tipo de Documento de Identidad *</label>
				                    <select name="tipo_doc_identidad" class="form-control" id="tipo_doc_identidadMi" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">DNI</option>
	                        			<option value="2">Carnet de extranjería</option>
	                        			<option value="3">Pasaporte</option>
	                        			<option value="4">Otros</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>No Documento *</label>
		                        <input type="text" class="form-control" name="no_doc" id="no_docMi" placeholder="Ingrese No Documento" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombre" id="nombreMi" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidos" id="apellidosMi" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefono" id="telefonoMi" placeholder="Ingrese teléfono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correo" id="correoMi" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM comunidad WHERE id_user = " . $_SESSION['datosUsuario']['id'];
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Comunidad *</label>
								    <select class="form-control" id="comunidadMi" name="comunidad" required readonly enable>
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
		               			<label>Afiliación *</label>
		                        <input type="text" class="form-control" name="afiliacion" id="afiliacionMi" placeholder="Ingrese afiliacion" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			           <div class="col-lg-6">
							<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM t_cat_facultades ORDER BY nombre";
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Facultad *</label>
								    <select class="form-control" id="facultadMi" name="facultad" required>
								    <option value="">[--Seleccione Facultad--]</option>
								<?php
									while ($mostrar = mysqli_fetch_array($result)) {
								?>
								    <option value="<?php echo $mostrar['id_facultad']; ?>"><?php echo $mostrar['nombre']; ?></option>
								<?php 
									}
								?>
								    </select>
								    <span class="fas fa-list"></span>
							</div>
						</div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Codigo Estudiante *</label>
		                        <input type="text" class="form-control" name="codigo_estudiante" id="codigo_estudianteMi" placeholder="Ingrese codigo" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Condición *</label>
				                    <select name="condicion" class="form-control" id="condicionMi" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">Pregrado</option>
	                        			<option value="2">Egresado</option>
	                        			<option value="3">Postgrado</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Tipo de Miembro *</label>
				                    <select name="tipo_miembro" class="form-control" id="tipo_miembroMi" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">Nacional</option>
	                        			<option value="2">Internacional</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            


		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarMiembro">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>