@extends('admin.templates.main')

@section('title', 'Crear Tipos de Habitacion')

@section('content')
	
	{!! Form::open(['route' => [ 'admin.habtipos.update', $habtipo ], 'method' => 'PUT', 'files' => true]) !!}
		
		<div class="cuestion2">
			<h2>Agregar Tipos de Habitacion</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo de Habitacion') !!}
			{!! Form::text('tipo', $habtipo->tipo, [ 'class' => 'form-control', 'placeholder' => 'Tipo de habitacion', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion de habitacion') !!}
			{!! Form::textarea('descripcion', $habtipo->descripcion, [ 'class' => 'form-control trumbowyg-demo', 'required'])!!}
		</div>

		<div class="form-group">
			<img <img src="/imagen/habtipo/{{ $habtipo->foto }}" width="200px" height="200px" align="center">
		</div>

		<div class="form-group">

			{!! Form::label('foto', 'Subir nueva foto') !!}
			{!! Form::file('foto'),$habtipo->foto !!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Guardar Cambios',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection

@section('js')

	<script>
			$('.trumbowyg-demo').trumbowyg({
				mobile: true,
    			tablet: true
			});

	</script>
		
@endsection
