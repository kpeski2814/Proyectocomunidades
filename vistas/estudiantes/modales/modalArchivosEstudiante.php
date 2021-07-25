<!-- MODAL AGREGAR NUEVO -->
<div class="modal fade" id="agregarArchivosEstudiante" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Archivos Complementarios (Estudiante)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3">
                <div class="container-fluid">
                    <div class="row">
                        
                          
                        <div class="col-md-12">
                            <form id="frmArchivoEstudiante" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoEstudiante()">
                            <input type="text" name="idEstudiante" class="idEstudiante" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>CTI-VITAE</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="cti_vitae_estudiante" name="cti_vitae_estudiante" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosCtiVitaeEstudiante">

                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-primary" style="padding: 2px 11px;font-size: 14px; margin-top: 6px">
                                                    GUARDAR
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        
                    </div><!-- ./ div row -->
                </div> <!-- ./container fluid -->
            </div>
        </div>
    </div>
</div>
<!-- END MODAL AGREGAR NUEVO -->