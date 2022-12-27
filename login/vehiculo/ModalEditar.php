
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tipo:</label>
                  <input type="text" name="tipo" class="form-control" value="<?php echo $dataCliente['tipo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Marca:</label>
                  <input type="text" name="marca" class="form-control" value="<?php echo $dataCliente['marca']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Modelo:</label>
                  <input type="text" name="modelo" class="form-control" value="<?php echo $dataCliente['modelo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Version:</label>
                  <input type="text" name="version" class="form-control" value="<?php echo $dataCliente['version']; ?>" required="true">
                </div>
                 <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Serie:</label>
                  <input type="text" name="serie" class="form-control" value="<?php echo $dataCliente['serie']; ?>" required="true">
                </div>
                 <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Matricula:</label>
                  <input type="text" name="matricula" class="form-control" value="<?php echo $dataCliente['matricula']; ?>" required="true">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
