@extends('admin.templates.main')

@section('title', 'Crear Cliente')

@section('content')
	
	{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}
		
		<div class="cuestion2">
			
			<h2>Agregar nuevos clientes</h2>
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
			{!! Form::label('estado_civil', 'Estado Civil') !!}
			{!! Form::text('estado_civil', null, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('prof_ocup', 'Profesión o Ocupación') !!}
			{!! Form::text('prof_ocup', null, [ 'class' => 'form-control','placeholder' => 'Profesión', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('pais', 'Pais') !!}
			{!! Form::text('pais', null, [ 'class' => 'form-control','placeholder' => 'Nombre del Pais', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('procedencia', 'Procendencia') !!}
			{!! Form::text('procedencia', null, [ 'class' => 'form-control','placeholder' => 'De donde proviene', 'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('destino', 'Destino') !!}
			{!! Form::text('destino', null, [ 'class' => 'form-control','placeholder' => 'A donde se dirige', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Numero de Celular') !!}
			{!! Form::text('celular', null, [ 'class' => 'form-control','placeholder' => 'Numero de celular o telefono', 'required'])!!}
		</div>
		

		<div class="form-group">
			
			{!! Form::submit('Registrar',[ 'class' => 'btn btn-primary'])!!}
		</div>

		</div>
		
		


	{!! Form::close() !!} 

@endsection
