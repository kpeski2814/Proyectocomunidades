<!-- MODAL AGREGAR NUEVO -->
<div class="modal fade" id="agregarArchivos" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Archivos Complementarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-3">
                <div class="container-fluid">
                    <div class="row">
                        
                          
                        <div class="col-md-12">
                            <form id="frmArchivoSolicitud" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoSolicitud()">
                            <input type="text" name="idComunidad" class="idComunidad" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Solicitud</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="solicitud" name="solicitud" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosSolicitud">

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

                        <div class="col-md-12">
                            <form id="frmArchivoResolucionDecanal" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoResolucionDecanal()">
                            <input type="text" name="idComunidad" class="idComunidad" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Resolución DECANAL</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="res_decanal" name="res_decanal" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosResolucionDecanal">

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

                        <div class="col-md-12">
                            <form id="frmArchivoResolucionVrin" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoResolucionVrin()">
                            <input type="text" name="idComunidad" class="idComunidad" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Resolución VRIN</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="res_vrin" name="res_vrin" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosResolucionVrin">

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
                        
                       <!--  <div class="col-md-12">
                            <form id="frmArchivoProduccionCientifica" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoProduccionCientifica()">
                            <input type="text" name="idComunidad" class="idComunidad" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Producción científica verificable</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="prod_cientifica" name="prod_cientifica" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center" id="mostrarArchivosProduccionCientifica">

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
                        </div> -->

                        <div class="col-md-12">
                            <form id="frmArchivoTipoDocumentoProduccion" enctype="multipart/form-data" 
                            onsubmit="return insertarArchivoTipoDocumentoProduccion()">
                            <input type="text" name="idComunidad" class="idComunidad" hidden="">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tipo de Documentos de producción</th>
                                            <th class="text-center">Tipo</th>
                                            <th class="text-center">URL</th>
                                            <th class="text-center">Opción</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <tr>
                                            <td style="">
                                                <input type="file" class="" id="tipo_archivo_prod" name="tipo_archivo_prod" 
                                                style="margin: 8px 0;">
                                            </td>
                                            <td class="text-center">
                                                <div class="form-icon">
                                                    <select class="form-control" name="tipo" id="tipo" required>
                                                        <option value="" value="">Tipo Archivo</option>
                                                        <option value="1">Articulo</option>
                                                        <option value="2">Revista</option>
                                                        <option value="3">Libros</option>
                                                        <option value="4">Capítulos de libros</option>
                                                    </select>
                                                    <span class="fa fa-list-ol"></span>
                                                </div>
                                            </td>
                                            <td style="">
                                                <div class="form-icon">
                                                    <input type="text" class="form-control" name="url" id="url" placeholder="Ingrese URL">
                                                    <span class="fas fa-link"></span>                    
                                                </div>
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
                        
                        <div class="col-md-12">
                            <!-- <td class="text-center" id="mostrarArchivosTipoDocumentosProduccion"></td> -->
                            <p style="background:#e9ecef;padding: 10px;font-weight: bold;">Producción científica verificable</p>
                            <div id="mostrarArchivosTipoDocumentosProduccion"></div>
                        </div>



                    </div><!-- ./ div row -->
                </div> <!-- ./container fluid -->
            </div>
        </div>
    </div>
</div>
<!-- END MODAL AGREGAR NUEVO -->