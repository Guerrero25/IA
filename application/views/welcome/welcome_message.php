<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="background">
	<div class="container">
		<div class="row" style="height:70vh">
			<div class="col-md-4 col-md-offset-4">
				<form action="<?= base_url()?>Estudiante/signin" method="POST">
					<div class="card">
						<div class="content">
							<h1 class="text-center">Bienvenido</h1>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="email">Usuario</label>
								<input type="text" class="form-control" id="user" name="user">
							</div>
							<div class="form-group">
								<label for="password">Contraseña</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Iniciar Sesion">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
