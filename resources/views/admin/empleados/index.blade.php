@extends('admin.templates.main')

@section('title', 'Lista de Empleados')

@section('content')

		
	
		<a href="{{ route('admin.empleados.create') }}" class="btn btn-info">Agregar Nuevo Empleado</a>

		<h3>Empleados</h3>
	<hr>
	<table class="table table-hover cuestion2">
		<thead>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cargo</th>

			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($empleados as $empleado)
				<tr>
					<td>{{ $empleado->id }}</td>
					<td>{{ $empleado->nombres }}</td>
					<td>{{ $empleado->apellidos }}</td>
					<td>{{ $empleado->emptipo->tipo }}</td>

					<td><a href="{{ route( 'admin.empleados.destroy', $empleado->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> <a href="{{ route( 'admin.empleados.edit', $empleado->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $empleados->render() !!}
	

	

@endsection