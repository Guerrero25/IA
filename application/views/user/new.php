<div class="background">
  <div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
      <div class="col-6">
        <form action="<?= base_url() ?>user/crear" method="POST">
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
                <label for="password">Contraseña: </label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña: </label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registrar">
                <a href="<?= base_url() ?>" class="btn btn-danger">Cancelar</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
