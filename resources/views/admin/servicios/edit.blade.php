@extends('admin.templates.main')

@section('title', 'Editar Servicio')

@section('content')
	
	{!! Form::open(['route' => [ 'admin.servicios.update', $servicio ], 'method' => 'PUT']) !!}
		
		<div class="cuestion2">
			<h2>Editar Servicios</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('servicio', 'Nombre del Servicio') !!}
			{!! Form::text('servicio', $servicio->servicio, [ 'class' => 'form-control', 'placeholder' => 'Servicio', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('costo', 'Costo del Servicio') !!}
			{!! Form::text('costo', $servicio->costo, [ 'class' => 'form-control', 'placeholder' => 'Costo', 'required'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
