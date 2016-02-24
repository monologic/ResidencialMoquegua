@extends('admin.templates.main')

@section('title', 'Crear Usuarios')

@section('content')
	
	{!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST']) !!}
		
		<div class="cuestion2">
			
			<h2>Agregar nuevos Usuarios</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('empleado_id', 'Empleado') !!}
			{!! Form::select('empleado_id', $empleados, null,[ 'class' => 'form-control', 'placeholder' => 'Seleccione un Empleado', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('usuario', 'Usuario') !!}
			{!! Form::text('usuario', null, [ 'class' => 'form-control', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'password') !!}
			{!! Form::password('password',[ 'class' => 'form-control', 'placeholder' => 'Ingrese Password', 'required'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
	{!! Form::close() !!} 

@endsection