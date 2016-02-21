@extends('admin.templates.main')

@section('title', 'Editar Tipo de Empleado')

@section('content')
	
	{!! Form::open(['route' => [ 'admin.empleadoTipos.update', $emptipo ], 'method' => 'PUT']) !!}
		
		<div class="cuestion2">
			<h2>Editar Tipo de Empleado</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo de Empleado') !!}
			{!! Form::text('tipo', $emptipo->tipo, [ 'class' => 'form-control', 'placeholder' => 'Tipo de Empleado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!}
			{!! Form::text('descripcion', $emptipo->descripcion, [ 'class' => 'form-control', 'placeholder' => 'Descripción', 'required'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
