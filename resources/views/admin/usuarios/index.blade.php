@extends('admin.templates.main')

@section('title', 'Usuarios del sistema')

@section('content')

		<a href="{{ route('admin.usuarios.create') }}" class="btn btn-info">Agregar Usuarios</a>

		<h3>Usuarios</h3>
	<hr>
	<table class="table table-hover cuestion2">
		<thead>
			<th>Nombre del Usuario</th>
			<th>Usuario</th>	
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->empleado->nombres . " " . $usuario->empleado->apellidos }}</td>
					<td>{{ $usuario->usuario }}</td>
					<td><a href="{{ route( 'admin.usuarios.destroy', $usuario->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> <a href="{{ route( 'admin.usuarios.edit', $usuario->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $usuarios->render() !!}

@endsection