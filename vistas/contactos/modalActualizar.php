
<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarContactoU">
            <div id="categoriasIdU"></div>
            <input type="text" name="idContactoU" id="idContactoU" hidden="">
            <label for="nombresU">Nombres</label>
            <input type="text" class="form-control" id="nombresU" name="nombresU">
            <label for="apellidosU">Apellidos</label>
            <input type="text" class="form-control" id="apellidosU" name="apellidosU">
            <label for="telefonoU">Telefono</label>
            <input type="text" class="form-control" id="telefonoU" name="telefonoU">
            <label for="emailU">Email</label>
            <input type="text" class="form-control" id="emailU" name="emailU">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarContacto">Editar</button>
      </div>
    </div>
  </div>
</div>