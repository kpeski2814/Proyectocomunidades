<!-- Modal -->
<div class="modal fade" id="agregarNuevaComunidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar nueva comunidad</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="frmComunidad" method="POST" onsubmit="return agregarComunidad()">
					<input type="hidden" name="cod_reg" id="cod_reg">
					<input type="hidden" name="id_user" id="id_user" value="<?php echo $idUsuario; ?>">
				    <div class="row">
			            <div class="col-lg-6">
			            	<div class="form-icon">
		               			<label>Denominación *</label>
		                        <input type="text" class="form-control" name="denominacion" id="denominacion" placeholder="Ingrese denominaci&oacute;n"required>
		                        <span class="fas fa-list"></span>                    
		                    </div>
			            </div>
					    <div class="col-lg-6">
							<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM tipo_comunidad ORDER BY id";
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Tipo de Comunidad *</label>
								    <select class="form-control" id="tipo_comunidad_id" name="tipo_comunidad_id" required>
								    <option value="">[--Seleccione Tipo de Comunidad--]</option>
								<?php
									while ($mostrar = mysqli_fetch_array($result)) {
								?>
								    <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['descripcion']; ?></option>
								<?php 
									}
								?>
								    </select>
								    <span class="fas fa-list"></span>
							</div>
						</div>
						
						<div class="col-lg-6">
							<div class="form-icon">
								<label>Numero de Registro</label>
                        		<input type="text" class="form-control" id="num_registro" name="num_registro" readonly>
                        		<span class="fas fa-hashtag"></span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-icon">
								<?php 
									$sql = "SELECT * FROM t_cat_facultades ORDER BY nombre";
									$result = mysqli_query($conexion, $sql);
								?>
								    <label>Facultad *</label>
								    <select class="form-control" id="id_facultad" name="id_facultad" required>
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
								<label>Evaluación Inicial</label>
			                    <select class="form-control" name="evaluacion_inicial" id="evaluacion_inicial" disabled>
			                        <option value="" value="">[--Seleccione Evaluación Inicial--]</option>
			                        <option value="1">Objetivos</option>
			                        <option value="2">Tamañao, composicion y calificacion de los mienbros</option>
			                        <option value="3">Liderazgo</option>
			                        <option value="4">Historia y desarrollo</option>
			                        <option value="5">Produccion</option>
			                        <option value="6">Financiamiento</option>
			                        <option value="7">Impacto social</option>
			                        <option value="8">Aval</option>
			                    </select>
			                    <span class="fa fa-list-ol"></span>
			                </div>
						</div>	
						<div class="col-lg-6">
							<div class="form-icon">
								<label>Nivel </label>
		                        <select name="nivel" class="form-control" id="nivel" disabled>
		                            <option value="">[--Seleccione--]</option>
		                            <option value="I">   I</option>
		                            <option value="II">  II</option>
		                            <option value="III"> III</option>
		                            <option value="IV">  IV</option>
		                        </select>
		                        <span class="fa fa-list-ol"></span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-icon">
							<?php 
									$sql = "SELECT * FROM t_cat_lineas ORDER BY id_linea";
									$result = mysqli_query($conexion, $sql);
								?>
								<label>Linea de investigacion</label>
			                    <select class="form-control" id="linea_inv" name="linea_inv" required>
								    <option value="">[--Seleccione Lineas de Investigación--]</option>
								<?php
									while ($mostrar = mysqli_fetch_array($result)) {
								?>
								    <option value="<?php echo $mostrar['id_linea']; ?>"><?php echo $mostrar['nombre']; ?></option>
								<?php 
									}
								?>
								    </select>
                    			<span class="fa fa-list-ol"></span>
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="form-icon">
								<label>Registro DANI</label>
			                    <input type="text" class="form-control" name="dani" id="dani" placeholder="Ingres Registro">
		                        <span class="fas fa-hashtag"></span> 
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="form-icon">
								<label>Financiamiento no institucional</label>
			                    <select name="fin_no_institucional" class="form-control" id="fin_no_institucional">
            		            	<option value="">[--Seleccione Financiamiento--]</option>
                    		    	<option value="1">Interno</option>
                        			<option value="2">Externo Internacional</option>
                        			<option value="3">Externo Nacional</option>
                    			</select>
                    			<span class="fa fa-list-ol"></span>
							</div>
						</div>
						<div class="col-lg-6">
		                    <div class="form-icon">
			                	<label>Facebook</label>
		                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Ingrese Facebook">
		                        <span class="fab fa-facebook-square"></span>
		                    </div>
			            </div>
			            <div class="col-lg-6">
			                    <div class="form-icon">
				                	<label>Pagina web</label>
				                    <input type="text" class="form-control" id="pag_web"  name="pag_web"  placeholder="Ingrese su pagina web">
				                    <span class="fab fa-google"></span>                   
			                    </div>
			            </div>
           				<div class="col-lg-6">
		                    <div class="form-icon">
		                		<label>Año Creación *</label>
		                        <input type="text" class="form-control form-readonly date_campo" id="date_created" name="date_created" placeholder="Ingrese Año de creación" required autocomplete="off">
		                        <span class="fa fa-calendar"></span>
		                	</div>
		                </div>
		                <div class="col-12 mt-2 text-center">
		                	<hr>
		                	<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary" id="btnGuardarComunidad">Guardar</button>
		                </div>	
	    			</div><!-- end row -->
				</form>
			
			</div><!-- end modal-body -->
			
		</div>
	</div>
</div>