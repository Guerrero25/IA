<header>

  <div class="container-fluid">
    <h1>Desertores Universitarios</h1></h1>
  </div>
  <nav class="navbar navbar-inverse bg-dark">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        <span class="sr-only">Menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?= base_url() ?>Admin/index">
          <img alt="Brand" width="110px" height="30px" src="http://190.242.62.230:8090/smaix12/vista/css/menu/logo.png" >
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Funciones Universidad <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>Estudiante/nuevo">Nuevo Estudiante</a></li>
            <li><a href="<?= base_url()?>Estudiante/index">Estudiantes</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Control Semestre <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>Admin/cerrar_matriculas">Cerrar Matriculas</a></li>
            <li><a href="<?= base_url()?>Admin/abrir_matriculas">Abrir Matriculas</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url()?>Desertores/index">Estadísticas de desertores</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?= base_url()?>Admin/cerrar_sesion"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Cerrar Sesión</a>
        </li>
      </ul>
    </div>

  </nav>


</header>
