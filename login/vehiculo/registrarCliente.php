
<form name="form-data" action="recibCliente.php" method="POST">

    <div class="row">
      <div class="form-group">
                        <input list="tipo" placeholder="Tipo de Vehiculo" name="tipo" class="form-control bg-light" required>
                        <datalist id="servicios">
                          <option value="Turismo"></option>
                          <option value="Furgoneta"></option>
                          <option value="Camion"></option>
                          <option value="Motocicleta"></option>
                          <option value="Ciclomotor"></option>
                        </datalist>
                    </div>
     
      <div class="col-md-12 mt-2">
          <label for="marca" class="form-label">Marca</label>
          <input type="text" class="form-control" name="marca" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="direccion" class="form-label">Modelo</label>
          <input type="text" class="form-control" name="Modelo" required='true'>
      </div>
       <div class="col-md-12 mt-2">
          <label for="version" class="form-label">Version</label>
          <input type="text" class="form-control" name="version" required='true'>
      </div>
       <div class="col-md-12 mt-2">
          <label for="serie" class="form-label">serie</label>
          <input type="text" class="form-control" name="serie" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="matricula" class="form-label">Matricula</label>
          <input type="text" class="form-control" name="matricula" required='true'>
      </div>

    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Cliente
              </button>
          </div>
      </div>
</form>
