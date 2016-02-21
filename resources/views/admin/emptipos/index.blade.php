@extends('admin.templates.main')

@section('title', 'Lista de Tipos de Empleados')

@section('content')

		
	
		<a href="{{ route('admin.empleadoTipos.create') }}" class="btn btn-info">Agregar Nuevo Tipo</a>

		<h3>Tipos de Empleados</h3>
	<hr>
	<table class="table table-hover cuestion2">
		<thead>
			<th>ID</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($emptipos as $emptipo)
				<tr>
					<td>{{ $emptipo->id }}</td>
					<td>{{ $emptipo->tipo }}</td>
					<td>{{ $emptipo->descripcion }}</td>
					<td>
						<a href="{{ route( 'admin.empleadoTipos.destroy', $emptipo->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="{{ route( 'admin.empleadoTipos.edit', $emptipo->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $emptipos->render() !!}
	

	

@endsection