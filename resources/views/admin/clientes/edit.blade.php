@extends('admin.templates.main')

@section('title', 'Editar Cliente')

@section('content')
	
	{!! Form::open(['route' => [ 'admin.clientes.update', $cliente ], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', $cliente->nombres, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos', $cliente->apellidos, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_nac', 'Fecha de Nacimiento') !!}
			{!! Form::date('fecha_nac',$cliente->fecha_nac ,[ 'class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sexo', 'Seleccione Sexo') !!}
			{!! Form::select('sexo', ['' => 'Seleccione...', 'M' => 'Masculino', 'F' => 'Femenino'], $cliente->sexo,[ 'class' => 'form-control',  'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('dni', 'DNI') !!}
			{!! Form::text('dni', $cliente->dni, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_civil', 'Estado Civil') !!}
			{!! Form::text('estado_civil', $cliente->estado_civil, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('prof_ocup', 'Profesión o Ocupación') !!}
			{!! Form::text('prof_ocup', $cliente->prof_ocup, [ 'class' => 'form-control','placeholder' => 'Profesión', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('pais', 'Pais') !!}
			{!! Form::text('pais', $cliente->pais, [ 'class' => 'form-control','placeholder' => 'Nombre del Pais', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('procedencia', 'Procendencia') !!}
			{!! Form::text('procedencia', $cliente->procedencia, [ 'class' => 'form-control','placeholder' => 'De donde proviene', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('destino', 'Destino') !!}
			{!! Form::text('destino', $cliente->destino, [ 'class' => 'form-control','placeholder' => 'A donde se dirige', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Numero de Celular') !!}
			{!! Form::text('celular', $cliente->celular, [ 'class' => 'form-control','placeholder' => 'Numero de celular o telefono', 'required'])!!}
		</div>
		

		<div class="form-group">
			
			{!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary'])!!}
		</div>
		


	{!! Form::close() !!} 

@endsection
