
<!-- Modal -->
<div class="modal fade" id="agregarNuevoUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form id="frmAgregarNuevoUsuario" method="POST" onsubmit = "return agregarNuevoUsuario()">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-icon">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" class="form-control" required>
                <span class="fas fa-user"></span>  
            </div>
                
            <div class="form-icon">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" class="form-control" required>
                <span class="fas fa-user"></span> 
            </div>
            <div class="form-icon">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" name="usuario" class="form-control" required>
                <span class="fas fa-user"></span>
            </div>
            <div class="form-icon">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" class="form-control" required>
                <span class="fas fa-user"></span>
            </div>
            <div class="form-icon">
                <label for="rolUsuario">Rol de usuario</label>
                <select name="rolUsuario" required class="form-control">
                    <option value="coordinador">Coordinador</option>
                    <option value="administrador">Administrador</option>
                </select>
                <span class="fas fa-user"></span>
            </div>
        </div>
        <div class="modal-footer">
            <span class="btn btn-secondary" data-dismiss="modal">Cerrar</span>
            <button class="btn btn-primary">Agregar</button>
        </div>
        </div>
    </div>
  </form>
</div>