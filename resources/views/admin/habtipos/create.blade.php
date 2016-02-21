@extends('admin.templates.main')

@section('title', 'Crear Tipos de Habitacion')

@section('content')
	
	{!! Form::open(['route' => 'admin.habtipos.store', 'method' => 'POST', 'files' => true]) !!}
		
		<div class="cuestion2">
			<h2>Agregar Tipos de Habitacion</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo de Habitacion') !!}
			{!! Form::text('tipo', null, [ 'class' => 'form-control', 'placeholder' => 'Tipo de habitacion', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion de habitacion') !!}
			{!! Form::textarea('descripcion', null, [ 'class' => 'form-control trumbowyg-demo', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('foto', 'Seleccione imagen') !!}
			{!! Form::file('foto') !!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Registrar tipo de habitacion',[ 'class' => 'btn btn-primary'])!!}
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

