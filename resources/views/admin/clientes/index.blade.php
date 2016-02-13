@extends('admin.templates.main')

@section('title', 'Lista de Usuario')

@section('content')
	<a href="{{ route('admin.clientes.create') }}" class="btn btn-info">Agregar Nuevo Cliente</a>
	<hr>
	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
				<tr>
					<td>{{ $cliente->id }}</td>
					<td>{{ $cliente->nombres }}</td>
					<td>{{ $cliente->apellidos }}</td>
					<td><a href="{{ route( 'admin.clientes.destroy', $cliente->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> <a href="{{ route( 'admin.clientes.edit', $cliente->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $clientes->render() !!}

@endsection