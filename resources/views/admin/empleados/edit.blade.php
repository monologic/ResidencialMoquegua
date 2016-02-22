@extends('admin.templates.main')

@section('title', 'Editar Empleado')

@section('content')
	
	{!! Form::open(['route' => ['admin.empleados.update', $empleado], 'method' => 'PUT']) !!}
		
		<div class="cuestion2">
			
			<h2>Editar Empleados</h2>
		<hr>
		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', $empleado->nombres, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos',$empleado->apellidos , [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_nac', 'Fecha de Nacimiento') !!}
			{!! Form::date('fecha_nac',$empleado->fecha_nac ,[ 'class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sexo', 'Seleccione Sexo') !!}
			{!! Form::select('sexo', ['' => 'Seleccione...', 'M' => 'Masculino', 'F' => 'Femenino'],$empleado->sexo ,[ 'class' => 'form-control',  'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('dni', 'DNI') !!}
			{!! Form::text('dni',$empleado->dni , [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion',$empleado->direccion , [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Celular') !!}
			{!! Form::text('celular',$empleado->celular , [ 'class' => 'form-control','placeholder' => 'Celular', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('emptipo_id', 'Tipo de Empleado') !!}
			{!! Form::select('emptipo_id', $emptipos,$empleado->emptipo->id ,[ 'class' => 'form-control', 'placeholder' => 'Seleccione un tipo de Empleado', 'required']) !!}
		</div>
		

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
