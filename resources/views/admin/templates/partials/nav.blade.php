<nav class="navbar navbar-default container-fluid wow fadeInDown cl">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin') }}">Administrador</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Inico<span class="sr-only">(current)</span></a></li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo Cliente
            <li><a href="#">Clientes Registrados</a></li>
            <li><a href="#">Habitaciones</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Estado de Habitaciones</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Servicios</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diseñar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Portada</a></li>
            <li><a href="#">Habitaciones</a></li>
            <li><a href="#">Articulos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Imagenes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Promociones</a></li>
          </ul>
        </li>

       
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->usuario }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
          </li>  
      </ul>



    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>