<!-- Modal -->
<div class="modal fade" id="modalActualizarEgresado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Egresado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmEgresadoActualizar" method="POST" onsubmit="return actualizarEgresado()">
					<input type="hidden" name="cod_regU" class="cod_regU">
					<input type="hidden" name="id_userU" class="id_userU" value="<?php echo $idUsuario; ?>">
					<input type="hidden" name="idEgresado" id="idEgresado">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>DNI *</label>
		                        <input type="text" class="form-control" name="dniU" id="dniEgU" placeholder="Ingrese dni" required>
		                        <span class="fas fa-hashtag"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Nombre *</label>
		                        <input type="text" class="form-control" name="nombreU" id="nombreEgU" placeholder="Ingrese nombre" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Apellidos *</label>
		                        <input type="text" class="form-control" name="apellidosU" id="apellidosEgU" placeholder="Ingrese apellidos" required>
		                        <span class="fas fa-user"></span>                    
		                    </div>
			            </div>
					   	<div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Tel??fono *</label>
		                        <input type="text" class="form-control" name="telefonoU" id="telefonoEgU" placeholder="Ingrese tel??fono" required>
		                        <span class="fas fa-phone"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Correo *</label>
		                        <input type="email" class="form-control" name="correoU" id="correoEgU" placeholder="Ingrese correo" required>
		                        <span class="fas fa-envelope"></span>                    
		                    </div>
			            </div>
			            <div class="col-lg-6">
			            	<div class="form-icon">
		                        <div class="form-icon">
			               			<label>Facultad *</label>
				                    <select name="facultadU" class="form-control" id="facultadEgU" required="">
	            		            	<option value="">[--Seleccionar--]</option>
	                    		    	<option value="1">facultad de administraci??n</option>
	                        			<option value="2">facultad de arquitectura y urbanismo</option>
	                        			<option value="3">facultad de ciencias econ??micas</option>
	                        			<option value="4">facultad de ciencias financieras y contables</option>
	                        			<option value="5">facultad de ciencias naturales y matem??tica</option>
	                        			<option value="6">facultad de ciencias sociales</option>
	                        			<option value="7">facultad de derecho y ciencia pol??tica</option>
	                        			<option value="8">facultad de educaci??n</option>
	                        			<option value="9">facultad de humanidades</option>
	                        			<option value="10">facultad de ingenier??a civil</option>
	                        			<option value="11">facultad de ingenier??a electr??nica e inform??tica</option>
	                        			<option value="12">facultad de ingenier??a geogr??fica y ambiental</option>
	                        			<option value="13">facultad de ingenier??a industrial y sistemas</option>
	                        			<option value="14">facultad de medicina</option>
	                        			<option value="15">facultad de odontolog??a</option>
	                        			<option value="16">facultad de oceanograf??a, pesquera y ciencias alimentarias</option>
	                        			<option value="17">facultad de psicolog??a</option>
	                        			<option value="18">facultad de tecnolog??a medica</option>
	                    			</select>
	                    			<span class="fa fa-list-ol"></span>
								</div>                 
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