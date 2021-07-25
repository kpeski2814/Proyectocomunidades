$(document).ready(function(){
    $('#tablaDeUsuarios').load("usuarios/tablaDeUsuarios.php");
});

function eliminarUsuario(idUsuario){
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
                data:"idUsuario=" + idUsuario,
                url:"../procesos/usuario/usuarios/eliminarUsuario.php",
                success:function(r) {
                    if(r > 0){
                        $('#tablaDeUsuarios').load("usuarios/tablaDeUsuarios.php");
                        swal("!Eliminado con exito¡",":D","info");
                    } else{
                        swal("!Error no se pudo eliminar¡",":(","error");
                    }
                }
            });
        }
    });
}

function agregarNuevoUsuario(){
    $.ajax({
        type:"POST",
        data:$('#frmAgregarNuevoUsuario').serialize(),
        url:"../procesos/usuario/usuarios/agregarNuevoUsuario.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaDeUsuarios').load("usuarios/tablaDeUsuarios.php");
                swal(":D","Agregado con exito!","success");
            } else {
                swal(":(", "No se puedo agregar!" + respuesta, "error");
            }
        }
    });

    return false;
}

function obtenerDatosCapturadosPorUsuario(idUsuario) {
    $.ajax({
        type:"POST",
        data:"idUsuario=" + idUsuario,
        url:"../procesos/usuario/usuarios/obtenerInformacionAgregada.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            console.log(respuesta);
            let cadenaHtml = "";
            $.each(respuesta, function(index, value) {
                if (index == 'comunidad' || index == 'coordinador' || index == 'investigador' || index == 'miembros' || index == 'planTrabajo') {
                    if (this != 0) {
                        cadenaHtml = cadenaHtml + '<h2>' + index + '</h2>';
                    }
                }
            });

            if (cadenaHtml == "") {
                cadenaHtml = "<p>No hay informacion agregada por este usuario</p>";
            }

            $('#informacionAgregadaDeUsuario').html(cadenaHtml);
        }
    });
}