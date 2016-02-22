@extends('admin.templates.main')

@section('title', 'Crear Empleado')

@section('content')
	
	{!! Form::open(['route' => 'admin.empleados.store', 'method' => 'POST']) !!}
		
		<div class="cuestion2">
			
			<h2>Agregar nuevos empleados</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', null, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_nac', 'Fecha de Nacimiento') !!}
			{!! Form::date('fecha_nac',null ,[ 'class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sexo', 'Seleccione Sexo') !!}
			{!! Form::select('sexo', ['' => 'Seleccione...', 'M' => 'Masculino', 'F' => 'Femenino'], null,[ 'class' => 'form-control',  'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('dni', 'DNI') !!}
			{!! Form::text('dni', null, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', null, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Celular') !!}
			{!! Form::text('celular', null, [ 'class' => 'form-control','placeholder' => 'Celular', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('emptipo_id', 'Tipo de Empleado') !!}
			{!! Form::select('emptipo_id', $emptipos, null,[ 'class' => 'form-control', 'placeholder' => 'Seleccione un tipo de Empleado', 'required']) !!}
		</div>
		

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
