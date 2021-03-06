@extends('admin.templates.main')

@section('title', 'Crear Servicio')

@section('content')
	
	{!! Form::open(['route' => 'admin.servicios.store', 'method' => 'POST']) !!}
		
		<div class="cuestion2">
			<h2>Agregar nuevos Servicios</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('servicio', 'Nombre del Servicio') !!}
			{!! Form::text('servicio', null, [ 'class' => 'form-control', 'placeholder' => 'Servicio', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('costo', 'Costo del Servicio') !!}
			{!! Form::text('costo', null, [ 'class' => 'form-control', 'placeholder' => 'Costo', 'required'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
