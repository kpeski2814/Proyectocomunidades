$(document).ready(function(){
	$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
	var fechaA = new Date();
    var yyyy = fechaA.getFullYear();
	$(".date_campo").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900:' + yyyy,
      dateFormat: "yy-mm-dd"
    });
    $(".form-readonly").keydown(function(e){
      e.preventDefault();
    });
});

function agregarEstudiante() {
  $.ajax({
    type: "POST",
    data: $('#frmEstudiante').serialize(),
    url: "../procesos/estudiantes/agregarEstudiante.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
      	$("#frmEstudiante")[0].reset();
        $('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin agregarInvestigador()

function actualizarEstudiante() {
  $.ajax({
    type: "POST",
    data: $('#frmEstudianteActualizar').serialize(),
    url: "../procesos/estudiantes/actualizarEstudiante.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        $('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarComunidad()

function obtenerDatosEstudiante(idEstudiante) {
  $.ajax({
    type: "POST",
    data: "idEstudiante=" + idEstudiante,
    url: "../procesos/estudiantes/obtenerDatosEstudiante.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idEstudiante').val(respuesta['idEstudiante']);
      $('#dniEsU').val(respuesta['dni']);
      $('#nombreEsU').val(respuesta['nombre']);
      $('#apellidosEsU').val(respuesta['apellidos']);
      $('#telefonoEsU').val(respuesta['telefono']);
      $('#correoEsU').val(respuesta['correo']);
      $('#facultadEsU').val(respuesta['facultad']);
    }
  });
  return false;
} // fin obtenerDatosInvestigador()	

// archivos modales
function obtenerIdEstudiante(idEstudiante){
    $('.idEstudiante').val(idEstudiante);
    obtenerArchivoEstudiante(idEstudiante);
}
function insertarArchivoEstudiante(){
    if ($('#cti_vitae_estudiante').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#cti_vitae_estudiante').val() !== "") {
        var archivoInput = document.getElementById('cti_vitae_estudiante');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoEstudiante"));
    $.ajax({
        url:"../procesos/estudiantes/archivos/agregarArchivoEstudiante.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoEstudiante(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoEstudiante()

function obtenerArchivoEstudiante(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/estudiantes/archivos/obtenerArchivoEstudiante.php",
        success:function(r){
            $("#mostrarArchivosCtiVitaeEstudiante").html(r);
        }
    });
} // fin obtenerArchivoEstudiante()

function eliminarArchivoEstudiante(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/estudiantes/archivos/eliminarArchivoEstudiante.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoEstudiante(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoEstudiante()
