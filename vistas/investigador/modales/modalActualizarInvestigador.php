<!-- Modal -->
<div class="modal fade" id="modalActualizarInvestigador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Investigador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmInvestigadorActualizar" method="POST" onsubmit="return actualizarInvestigador()">
					<input type="hidden" name="cod_regU" class="cod_regU">
					<input type="hidden" name="id_userU" class="id_userU" value="<?php echo $idUsuario; ?>">
					<input type="hidden" name="idInvestigador" id="idInvestigador">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dniUIn" id="dniUIn" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombreUIn" id="nombreUIn" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidosUIn" id="apellidosUIn" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefonoUIn" id="telefonoUIn" placeholder="Ingrese teléfono" required>
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
								    <select class="form-control" id="comunidadUIn" name="comunidadUIn" required>
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
		               			<label>Cargo *</label>
		                        <input type="text" class="form-control" name="cargoUIn" id="cargoUIn" placeholder="Ingrese cargo" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correoUIn" id="correoUIn" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Tipo de Investigador *</label>
				                    <select name="tipo_investigadorUIn" class="form-control" id="tipo_investigadorUIn" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">Principal</option>
	                        			<option value="2">Asociado</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Enlace CTI Vitae</label>
		                        <input type="text" class="form-control" name="enlace_cti_vitaeUIn" id="enlace_cti_vitaeUIn" placeholder="Ingrese Enlace CTI Vitae">
		                        <span class="fas fa-link"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Calificación RENACYT</label>
				                    <select name="calif_renacytUIn" class="form-control" id="calif_renacytUIn">
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
				                    <select name="grupoUIn" class="form-control" id="grupoUIn">
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
				                    <select name="nivelUIn" class="form-control" id="nivelInvestigadorUIn">
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
		                        <input type="text" class="form-control" name="codigo_orcidUIn" id="codigo_orcidUIn" placeholder="Ingrese Código Orcid">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>ScopusId</label>
		                        <input type="text" class="form-control" name="scopusIdUIn" id="scopusIdUIn" placeholder="Ingrese ScopusId">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Clase</label>
			                    <select name="claseUIn" class="form-control" id="claseUIn" required="">
            		            	<option value="">[--Seleccionar--]</option>
                    		    	<option value="1">Docente Investigador</option>
                        			<option value="2">Docente que realiza Investigación</option>
                    			</select>
                    			<span class="fa fa-list-ol"></span>                   
		                    </div>
			            </div>

			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Título y Especialidad</label>
		                        <input type="text" class="form-control" name="titulo_especialidadUIn" id="titulo_especialidadUIn" placeholder="Ingrese Título y Especialidad" required="">
		                        <span class="fas fa-graduation-cap"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Grado Academico</label>
				                    <select name="grado_academicoUIn" class="form-control" id="grado_academicoUIn" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">Bachiller</option>
	                        			<option value="2">Titulado</option>
	                        			<option value="3">Magister</option>
	                        			<option value="4">Doctorado</option>
	                        			<option value="4">PHD</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Área</label>
		                        <input type="text" class="form-control" name="areaUIn" id="areaUIn" placeholder="Ingrese área" >
		                        <span class="fas fa-edit"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Especifique</label>
		                        <input type="text" class="form-control" name="especificacionUIn" id="especificacionUIn" placeholder="Especifique">
		                        <span class="far fa-edit"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Notas</label>
		                        <input type="text" class="form-control" name="notasUIn" id="notasUIn" placeholder="Ingrese observaciones" >
		                        <span class="fas fa-edit"></span>                    
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