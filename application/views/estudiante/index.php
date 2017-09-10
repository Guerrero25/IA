<div class="container">
  <? if(isset($msg)){ ?>
  <section class="etiqueta row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <p><?= $msg ?></p>
    </div>

  </section>
  <?}?>
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
            <? foreach ($estudiantes as $value) {?>
            <tr> <th scope=row><?=$value->id?></th>
              <td><?=$value->email?></td>
              <td><?=$value->name?></td>
              <td><?=$value->program?></td>
              <td><?=$value->estado == 1? 'Sin Matricular' : 'Matriculado'?></td>
              <td><?if($value->estado == 1){?> <a href="<?=base_url()?>Estudiante/matricular/<?=$value->id?>" class="btn btn-success">Matricular</a> <?}?></td>
            </tr>
            <?}?>
          </tbody>
        </table>
      </div>

    </div></br>
  </section>

</div>
