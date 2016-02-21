@extends('admin.templates.main')

@section('title', 'Lista de Servicios')

@section('content')

		
	
		<a href="{{ route('admin.servicios.create') }}" class="btn btn-info">Agregar Nuevo Servicio</a>

		<h3>Servicios</h3>
	<hr>
	<table class="table table-hover cuestion2">
		<thead>
			<th>ID</th>
			<th>Servicio</th>
			<th>Costo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($servicios as $servicio)
				<tr>
					<td>{{ $servicio->id }}</td>
					<td>{{ $servicio->servicio }}</td>
					<td>{{ $servicio->costo }}</td>
					<td>
						<a href="{{ route( 'admin.servicios.destroy', $servicio->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="{{ route( 'admin.servicios.edit', $servicio->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $servicios->render() !!}
	

	

@endsection