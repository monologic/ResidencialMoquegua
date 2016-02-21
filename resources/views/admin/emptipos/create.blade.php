@extends('admin.templates.main')

@section('title', 'Crear Tipo de Empleado')

@section('content')
	
	{!! Form::open(['route' => 'admin.empleadoTipos.store', 'method' => 'POST']) !!}
		
		<div class="cuestion2">
			<h2>Agregar nuevos Tipos de Empleado</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo de Empleado') !!}
			{!! Form::text('tipo', null, [ 'class' => 'form-control', 'placeholder' => 'Tipo de Empleado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!}
			{!! Form::text('descripcion', null, [ 'class' => 'form-control', 'placeholder' => 'Descripcion', 'required'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
