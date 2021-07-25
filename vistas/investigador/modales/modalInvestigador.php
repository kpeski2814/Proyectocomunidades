<!-- Modal -->
<div class="modal fade" id="agregarNuevoInvestigador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar nuevo investigador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmInvestigador" method="POST" onsubmit="return agregarInvestigador()">
					<input type="hidden" name="cod_reg" class="cod_reg">
					<input type="hidden" name="id_user" class="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dni" id="dniIn" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombre" id="nombreIn" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidos" id="apellidosIn" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Teléfono *</label>
		                        <input type="text" class="form-control" name="telefono" id="telefonoIn" placeholder="Ingrese teléfono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM comunidad where id_user = " . $_SESSION['datosUsuario']['id'];
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Comunidad *</label>
								    <select class="form-control" id="comunidadIn" name="comunidadIn" required readonly>
								    
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
		                        <input type="text" class="form-control" name="cargo" id="cargoIn" placeholder="Ingrese cargo" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correo" id="correoIn" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Tipo de Investigador *</label>
				                    <select name="tipo_investigador" class="form-control" id="tipo_investigadorIn" required="">
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
		                        <input type="text" class="form-control" name="enlace_cti_vitae" id="enlace_cti_vitaeIn" placeholder="Ingrese Enlace CTI Vitae">
		                        <span class="fas fa-link"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Calificación RENACYT</label>
				                    <select name="calif_renacyt" class="form-control" id="calif_renacytIn">
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
				                    <select name="grupo" class="form-control" id="grupoIn">
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
				                    <select name="nivel" class="form-control" id="nivelInvestigador">
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
		                        <input type="text" class="form-control" name="codigo_orcid" id="codigo_orcidIn" placeholder="Ingrese Código Orcid">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>ScopusId</label>
		                        <input type="text" class="form-control" name="scopusId" id="scopusIdIn" placeholder="Ingrese ScopusId">
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Clase</label>
			                    <select name="clase" class="form-control" id="claseIn" required="">
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
		                        <input type="text" class="form-control" name="titulo_especialidad" id="titulo_especialidadIn" placeholder="Ingrese Título y Especialidad" required="">
		                        <span class="fas fa-graduation-cap"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Grado Academico</label>
				                    <select name="grado_academico" class="form-control" id="grado_academicoIn" required="">
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
		                        <input type="text" class="form-control" name="area" id="areaIn" placeholder="Ingrese área" >
		                        <span class="fas fa-edit"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Especifique</label>
		                        <input type="text" class="form-control" name="especificacion" id="especificacionIn" placeholder="Especifique">
		                        <span class="far fa-edit"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Notas</label>
		                        <input type="text" class="form-control" name="notas" id="notasIn" placeholder="Ingrese observaciones" >
		                        <span class="fas fa-edit"></span>                    
		                    </div>
			            </div>


		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarInvestigador">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>