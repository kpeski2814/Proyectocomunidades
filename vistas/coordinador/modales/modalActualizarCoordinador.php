<!-- Modal -->
<div class="modal fade" id="modalActualizarCoordinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar coordinador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmCoordinadorActualizar" method="POST" onsubmit="return actualizarCoordinador()">
					<input type="hidden" name="cod_regU" class="cod_regU">
					<input type="hidden" name="id_userU" class="id_userU" value="<?php echo $idUsuario; ?>">
					<input type="hidden" name="idCoordinador" id="idCoordinador">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dniU" id="dniU" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombreU" id="nombreU" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidosU" id="apellidosU" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefonoU" id="telefonoU" placeholder="Ingrese teléfono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>


			            <div class="col-lg-6">
			            	<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM comunidad ORDER BY id";
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Comunidad *</label>
								    <select class="form-control" id="comunidadU" name="comunidadU" required>
								    <option value="">[--Seleccione--]</option>
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
		                        <div class="form-icon">
			               			<label>Categoría *</label>
				                    <select name="categoriaU" class="form-control" id="categoriaU" required>
	            		            	<option value="0">[--Seleccionar--]</option>
	                    		    	<option value="1">Principal</option>
	                        			<option value="2">Asociado</option>
	                        			<option value="3">Auxiliar</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>

			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Dedicación *</label>
				                    <select name="dedicacionU" class="form-control" id="dedicacionU" required>
	            		            	<option value="0">[--Seleccionar--]</option>
	                    		    	<option value="1">Parcial</option>
	                        			<option value="2">Completo</option>
	                        			<option value="3">Exclusiva</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>


			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Cargo *</label>
		                        <input type="text" class="form-control" name="cargoU" id="cargoU" placeholder="Ingrese cargo" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correoU" id="correoU" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Enlace CTI Vitae</label>
		                        <input type="text" class="form-control" name="enlace_cti_vitaeU" id="enlace_cti_vitaeU" placeholder="Ingrese Enlace CTI Vitae">
		                        <span class="fas fa-link"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Calificación RENACYT</label>
				                    <select name="calif_renacytU" class="form-control" id="calif_renacytU">
	            		            	<option value="0">[--Seleccionar--]</option>
	                    		    	<option value="1">Si</option>
	                        			<option value="2">No</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Grupo</label>
				                    <select name="grupoU" class="form-control" id="grupoU">
	            		            	<option value="0">[--Seleccionar--]</option>
	                    		    	<option value="1">Maria Rostworowski</option>
	                        			<option value="2">Carlos Mongue</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Nivel</label>
				                    <select name="nivelU" class="form-control" id="nivelCoordinadorU">
	            		            	<option value="0">[--Seleccionar--]</option>
	                    		    	<option value="1">I</option>
	                        			<option value="2">II</option>
	                        			<option value="3">III</option>
	                        			<option value="4">IV</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Código Orcid</label>
		                        <input type="text" class="form-control" name="codigo_orcidU" id="codigo_orcidU" placeholder="Ingrese Código Orcid">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>ScopusId</label>
		                        <input type="text" class="form-control" name="scopusIdU" id="scopusIdU" placeholder="Ingrese ScopusId">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Tematicas</label>
		                        <input type="text" class="form-control" name="tematicasU" id="tematicasU" placeholder="Ingrese Tematicas">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>




		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>