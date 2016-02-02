@extends('admin.templates.main')

@section('title', 'Crear Cliente')

@section('content')
	
	{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombres', 'Nombres') !!}
			{!! Form::text('nombres', null, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('fechanac', 'Fecha de Nacimiento') !!}
			{!! Form::date('fechanac',null ,[ 'class' => 'form-control']) !!}
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
			{!! Form::label('estadocivil', 'Estado Civil') !!}
			{!! Form::text('estadocivil', null, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('prof_ocup', 'Profesión o Ocupación') !!}
			{!! Form::text('prof_ocup', null, [ 'class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
		</div>


	{!! Form::close() !!}

@endsection
