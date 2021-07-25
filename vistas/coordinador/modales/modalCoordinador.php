<!-- Modal -->
<div class="modal fade" id="agregarNuevoCoordinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar nuevo coordinador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmCoordinador" method="POST" onsubmit="return agregarCoordinador()">
					<input type="hidden" name="cod_reg" class="cod_reg">
					<input type="hidden" name="id_user" class="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre" required value='<?php echo $_SESSION["datosUsuario"]["nombre"] ?>'>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese apellidos" required value='<?php echo $_SESSION["datosUsuario"]["apellido"] ?>'>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese teléfono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>



			            <div class="col-lg-6">
			            	<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM comunidad ORDER BY id";
									$result = mysqli_query($conexion, $sql);
									$idUsuario = $_SESSION['datosUsuario']['id'];
								?>
								    <label>Comunidad *</label>
								    <select class="form-control" id="comunidad" name="comunidad" required readonly>
								<?php
									while ($mostrar = mysqli_fetch_array($result)) {
										if ($idUsuario == $mostrar['id_user']) {
								?>
										<option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['denominacion']; ?></option>
								<?php
										}
								?>
								    
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
				                    <select name="categoria" class="form-control" id="categoria" required>
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
				                    <select name="dedicacion" class="form-control" id="dedicacion" required>
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
		                        <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Ingrese cargo" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Enlace CTI Vitae</label>
		                        <input type="text" class="form-control" name="enlace_cti_vitae" id="enlace_cti_vitae" placeholder="Ingrese Enlace CTI Vitae">
		                        <span class="fas fa-link"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Calificación RENACYT</label>
				                    <select name="calif_renacyt" class="form-control" id="calif_renacyt">
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
				                    <select name="grupo" class="form-control" id="grupo">
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
				                    <select name="nivel" class="form-control" id="nivelCoordinador">
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
		                        <input type="text" class="form-control" name="codigo_orcid" id="codigo_orcid" placeholder="Ingrese Código Orcid">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>ScopusId</label>
		                        <input type="text" class="form-control" name="scopusId" id="scopusId" placeholder="Ingrese ScopusId">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Tematicas</label>
		                        <input type="text" class="form-control" name="tematicas" id="tematicas" placeholder="Ingrese Tematicas">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>






		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarCoordinador">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>