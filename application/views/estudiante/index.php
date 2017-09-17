<div class="container">
  <section class="main row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Total Estudiantes</div>

        <table class=table>
          <thead>
            <tr> <th>#</th> <th>Email</th> <th>Nombre</th> <th>Programa</th><th>Estado</th><th>Acciones</th></tr>
          </thead>
          <tbody>
            <?php foreach ($estudiantes as $estudiante) { ?>
              <tr> <th scope=row><?=$estudiante->id?></th>
                <td><?=$estudiante->email?></td>
                <td><?=$estudiante->name?></td>
                <td><?=$estudiante->program?></td>
                <td><?=$estudiante->estado == 1? 'Sin Matricular' : 'Matriculado'?></td>
                <td><?php if($estudiante->estado == 1){ ?> <a href="<?=base_url()?>Estudiante/matricular/<?=$estudiante->id?>" class="btn btn-success">Matricular</a> <?php } ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div></br>
  </section>

</div>
