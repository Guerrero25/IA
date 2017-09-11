<div class="container">
  <div class="row justify-content-center align-items-center" style="height:100vh">
    <div class="col-md-6 col-md-offset-3">
      <form action="<?= base_url() ?>Estudiante/crear" method="POST">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="email">Correo Electrónico: </label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="name">Nombre: </label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="program">Programa: </label>
              <input type="text" class="form-control" id="program" name="program">
            </div>
            <div class="form-group">
              <label for="address">Dirección: </label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
              <label for="phone">Teléfono: </label>
              <input type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Registrar">
              <a href="<?= base_url() ?>Admin" class="btn btn-danger">Cancelar</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
