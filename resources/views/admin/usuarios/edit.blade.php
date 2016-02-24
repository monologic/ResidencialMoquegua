@extends('admin.templates.main')

@section('title', 'Editar Empleado')

@section('content')
	
	{!! Form::open(['route' => ['admin.usuarios.update', $usuario], 'method' => 'PUT']) !!}
		
		<div class="cuestion2">
			
			<h2>Editar Empleados</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('empleado_id', 'empleado') !!}
			{!! Form::select('empleado_id', $empleados,$usuario->empleado->id ,[ 'class' => 'form-control', 'placeholder' => 'Seleccione un tipo de Empleado', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('usuario', 'Usuario') !!}
			{!! Form::text('usuario', $usuario->usuario, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'password') !!}
			{!! Form::text('password',null, [ 'class' => 'form-control', 'placeholder' => '**********', 'required'])!!}
		</div>
		

		

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection