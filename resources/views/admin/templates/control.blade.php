<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Control</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/objetos/css/ve.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/objetos/css/animate.css') }}">
</head>
<style>

	@import url(https://fonts.googleapis.com/css?family=Open+Sans);
	body{
		background-color: rgba(204, 202, 202, 0.6);
	}
	head{
		display: block;
		position: relative;
	}
	section{
		display: block;
		position: relative;
	}
	blockquote{
		margin-top: 25px;
		background-color: rgb(104, 102, 102);
		font-family: 'Open Sans', sans-serif;
		margin-top: 0;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}

	.contenedor{
		display: flex;
  		justify-content: center;
  		align-items: center;
		width: 100%;
		padding: 20px;
		top: 100px;
	}
	.tab{

		width: 90%;
		flex-wrap: nowrap | wrap | wrap-reverse;
		background-color: white;
		border-width:1px;
		border-radius: 10px;
		
	}
	.pdc{
		width: 100%;
		color: white;
	}
	.elem{
		display:inline-block;
		width: 160px;
		height: 120px;
		border-style: solid;
		border-radius: 10px;
		border-width:0.7px;
		border-color: rgb(53, 55, 197);
		margin: 10px;
		color: rgba(53, 55, 197, 0.9);
		text-align: center;
		font-size: 1.4rem;
		font-family: 'Open Sans', sans-serif;

	}
	.elem:hover{
		border-width: 2.5px;
		border-color: rgb(35, 151, 33);
		color: rgb(35, 151, 33);

	}
	.tab span{
		margin-top: 20px;
		font-size: 4rem;	
	}
	.txt{
		margin-top: 15px;
	}
	.cl{
		background-color: rgb(60, 60, 60);
		}

</style>
<body>

<head>
	 @include('admin.templates.partials.nav')
</head>

	<section class="contenedor">
		
		<div class="tab">
			<blockquote>
	  			<p class="pdc">Panel de Control</p>
			</blockquote>

			<div class="obj">
				<a href="{{ route('admin.clientes.index') }}"><div class="elem"><span class="glyphicon glyphicon-list"></span><p class="txt">Clientes</p></div></a>
				<a href="{{ route('admin.usuarios.index') }}"><div class="elem"><span class="glyphicon glyphicon-user"></span><p class="txt">Usuarios</p></div></a>
				<a href=""><div class="elem"><span class="glyphicon glyphicon-home"></span><p class="txt">Habitaciones</p></div></a>
				<a href=""><div class="elem"><span class="glyphicon glyphicon-cloud-upload"></span><p class="txt">Reservas</p></div></a>
				<a href=""><div class="elem"><span class="glyphicon glyphicon-check".glyphicon .glyphicon-check></span><p class="txt">Comprabantes</p></div></a>
				<a href="{{ route('admin.empleados.index') }}"><div class="elem"><span class="glyphicon glyphicon-folder-open"></span><p class="txt">Empleados</p></div></a>
				<a href="{{ route('admin.habtipos.index') }}"><div class="elem"><span class="glyphicon glyphicon-tag"></span><p class="txt">Tipos de Habitaciones</p></div></a>
				<a href="{{ route('admin.servicios.index') }}"><div class="elem"><span class="glyphicon glyphicon-cutlery"></span><p class="txt">Servicios</p></div></a>


			</div>

		</div>
	</section>
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/objetos/js/wow.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/objetos/js/scrol.js') }}"></script>

	<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
</body>
</html>