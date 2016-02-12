@extends('welcome')

@section('title', 'Reservar')

@section('reserva')


	
	{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}
	
	<div class=" container-fluid">
        <div class=" row">

		        <div class="form-group">
					
					{!! Form::text('nombres', null, [ 'class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
				</div>
				<div class="form-group">
					
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
				
				<div class="bts">
					<button class="btn btn-primary bt">aceptar</button>
				</div>
		
	{!! Form::close() !!} 
        
        </div>
    </div>
		

@endsection
