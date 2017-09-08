<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="background">
	<div class="container">
		<div class="row justify-content-center align-items-center" style="height:70vh">
			<div class="col-4">
				<form action="">
					<div class="card">
						<div class="card-title">
							<h1 class="text-center">Bienvenido</h1>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="email">Correo Electrónico</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="password">Contraseña</label>
								<input type="password" class="form-control" id="password">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Iniciar Sesion">
								<a href="<?= base_url() ?>User/nuevo" class="btn btn-danger">Registrarte</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
