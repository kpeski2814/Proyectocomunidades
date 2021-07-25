<?php 

	class MetodosUtiles {

		public function edadPorFechaNacimiento($fechaInicio,$fechaFin) {
			/*
		
			!Tambien funciona para sacar la diferencia entre horas :D¡

			Para obtener los años de diferencia entre fechas esta en $datos[0]
			Para obtener los meses de diferencia entre fechas esta en $datos[1]
			Para obtener los dias de diferencia entre fechas esta en $datos[2]
			para obtener las horas de diferencia esta en $datos[3] 
			Para obtener los minutos que has transcurrido en $datos[4]
			para obtener los segundos transcurridos $datos[5]
			*/
			if (!$fechaFin == "") {
				
				$datetime1 = date_create($fechaInicio);
				$datetime2 = date_create($fechaFin);
				$interval = date_diff($datetime1, $datetime2);
				$datos = array();
				foreach ($interval as $val){
					$datos[] = $val;    
				}
				return $datos;
			} else {
				return 0;
			}
		}

		public function buscarComunidadDeUsuario($conexion, $idUsuario) {
			$sql = "SELECT * FROM comunidad WHERE id_user = '$idUsuario'";
			$respuesta = mysqli_query($conexion, $sql);

			if (mysqli_num_rows($respuesta) > 0) {
				return 1;
			} else {
				return 0;
			}
		}
	}
 ?>