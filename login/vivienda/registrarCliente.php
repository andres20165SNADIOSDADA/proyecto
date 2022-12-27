
<form name="form-data" action="recibCliente.php" method="POST">

    <div class="row">
      <div class="form-group">
        <input list="servicios" placeholder="Departamento" name="departamento" 
                        class="form-control bg-light" required>
                        <datalist id="servicios">
                          <option value="Cordoba"></option>
                          <option value="Choco"></option>
                          <option value="Antioquia"></option>
                          <option value="Tolima"></option>
                          <option value="Sucre"></option>
                        </datalist>
                    </div>
      <div class="col-md-12">
          <label for="name" class="form-label">Nombre del Cliente</label>
          <input type="text" class="form-control" name="nombre" required='true' autofocus>
      </div>
      <div class="col-md-12 mt-2">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" name="correo" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" name="direccion" required='true'>
      </div>
       <div class="col-md-12 mt-2">
          <label for="cedula" class="form-label">Cedula</label>
          <input type="text" class="form-control" name="cedula" required='true'>
      </div>
       <div class="col-md-12 mt-2">
          <label for="serie" class="form-label">serie</label>
          <input type="text" class="form-control" name="serie" required='true'>
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
