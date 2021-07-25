<?php 
		
	require_once "Conexion.php";
	class PlanDeTrabajo extends Conectar {
		public function agregarDatosPlanDeTrabajo($datos) {
			$conexion = Conectar::conexion();
			$sql = "INSERT INTO t_plan_trabajo (id_user, 
											    id_comunidad,
											    fecha) 
							VALUES (?,?,?)";
			$query = $conexion->prepare($sql);
			$query->bind_param("iis",$datos['id_user'], 
						 			 $datos['id_comunidad'],
						 			 $datos['fecha']
									 			);
			$query->execute();
			return mysqli_insert_id($conexion);
			$query->close();
		}
		



		//archivos

		public function agregarDatosArchivosPlanDeTrabajo($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_plan_trabajo,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													plan_trabajo)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['id_plan_trabajo'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['plan_trabajo']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['id_plan_trabajo'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivo($idPlan,$tipo) {
	  		//return $idPlan;
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		    					id_plan_trabajo,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_plan_trabajo ='$idPlan' and plan_trabajo ='1'";
		  

		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    $cadena  = "";
		    if ($datos == '') {
		        $cadena = $cadena . '
		          <i class="fas fa-exclamation-circle" style="color:#D73925;position: absolute;
		          margin: 5px 0 0 -16px; font-size: 25px;"></i>';
		      return $cadena;
		    } else {
		    		if ($tipo == 'ver') {
		    			$cadena  = $cadena . '
		            
				              <a href="' . '../archivos/planDeTrabajo/' . $datos['nombre'] . '" target="_blank">
				                <i class="fas fa-file-alt" style="font-size:25px;color:#ffc107;"></i>
				              </a>
				            ';
				      	return $cadena;
		    		} else {
		    			$cadena  = $cadena . '
		            
				              <a href="' . '../archivos/planDeTrabajo/' . $datos['nombre'] . '" target="_blank" download="' . $datos['nombre_original'] . '">
				                <i class="fas fa-file-download" style="font-size:25px;color:#138496;"></i>
				              </a>
				            ';
				      	return $cadena;
		    		}
		    }
  		}

	} // end class

 ?>