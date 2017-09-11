<div class="container">

  <section class="main row">

    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Estudiantes desertados</div>

        <table class=table>
          <thead>
            <tr> <th>#</th> <th>Email</th> <th>Nombre</th> <th>Programa</th> <th>Dirección</th></tr>
          </thead>
          <tbody>
            <?foreach ($desertores as $value) {?>
            <tr>
              <th scope=row><?=$value->id?></th>
              <td><?=$value->email?></td>
              <td><?=$value->name?></td>
              <td><?=$value->program?></td>
              <td><?=$value->address?></td>
            </tr>
            <?}?>
          </tbody>
        </table>
      </div>

    </div></br>
  </section>

</div>
