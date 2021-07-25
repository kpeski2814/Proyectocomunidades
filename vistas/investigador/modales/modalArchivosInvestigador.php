<!-- MODAL AGREGAR NUEVO -->
<div class="modal fade" id="agregarArchivosInvestigador" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Archivos Complementarios (Investigador)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3">
                <div class="container-fluid">
                    <div class="row">
                        
                          
                        <div class="col-md-12">
                            <form id="frmArchivoInvestigador" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoInvestigador()">
                            <input type="text" name="idInvestigador" class="idInvestigador" hidden="">
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
                                                <input type="file" class="" id="cti_vitae_investigador" name="cti_vitae_investigador" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosCtiVitaeInvestigador">

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