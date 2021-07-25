$(document).ready(function(){
	$('#tablaEgresados').load("egresados/tablaEgresados.php");
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

function agregarEgresado() {
  $.ajax({
    type: "POST",
    data: $('#frmEgresado').serialize(),
    url: "../procesos/egresados/agregarEgresado.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
      	$("#frmEgresado")[0].reset();
        $('#tablaEgresados').load("egresados/tablaEgresados.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin agregarEgresado()

function actualizarEgresado() {
  $.ajax({
    type: "POST",
    data: $('#frmEgresadoActualizar').serialize(),
    url: "../procesos/egresados/actualizarEgresado.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        $('#tablaEgresados').load("egresados/tablaEgresados.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarEgresado()

function obtenerDatosEgresado(idEgresado) {
  $.ajax({
    type: "POST",
    data: "idEgresado=" + idEgresado,
    url: "../procesos/egresados/obtenerDatosEgresado.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idEgresado').val(respuesta['idEgresado']);
      $('#dniEgU').val(respuesta['dni']);
      $('#nombreEgU').val(respuesta['nombre']);
      $('#apellidosEgU').val(respuesta['apellidos']);
      $('#telefonoEgU').val(respuesta['telefono']);
      $('#correoEgU').val(respuesta['correo']);
      $('#facultadEgU').val(respuesta['facultad']);
    }
  });
  return false;
} // fin obtenerDatosEgresado()	

// archivos modales
function obtenerIdEgresado(idEgresado){
    $('.idEgresado').val(idEgresado);
    obtenerArchivoEgresado(idEgresado);
}
function insertarArchivoEgresado(){
    if ($('#cti_vitae_egresado').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#cti_vitae_egresado').val() !== "") {
        var archivoInput = document.getElementById('cti_vitae_egresado');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoEgresado"));
    $.ajax({
        url:"../procesos/egresados/archivos/agregarArchivoEgresado.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoEgresado(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoEgresado()

function obtenerArchivoEgresado(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/egresados/archivos/obtenerArchivoEgresado.php",
        success:function(r){
            $("#mostrarArchivosCtiVitaeEgresado").html(r);
        }
    });
} // fin obtenerArchivoEgresado()

function eliminarArchivoEgresado(idArchivo) {
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
            url:"../procesos/egresados/archivos/eliminarArchivoEgresado.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoEgresado(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoEgresado()