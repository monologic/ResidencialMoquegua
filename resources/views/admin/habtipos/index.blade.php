@extends('admin.templates.main')

@section('title', 'Tipos de Habitaciones')

@section('content')

		
	
		<a href="{{ route('admin.habtipos.create') }}" class="btn btn-info">Agregar Tipo de Habitacion</a>

		<h3>Tipos de Habitacion</h3>
	<hr>
	<table class="table table-hover cuestion2">
		<thead>
			<th>ID</th>
			<th>Tipo de Habitacion</th>
			
			<th>Foto</th>
		</thead>
		<tbody>
			@foreach($habtipos as $habtipo)
				<tr>
					<td>{{ $habtipo->id }}</td>
					<td>{{ $habtipo->tipo }}</td>
					
					<td><img src="/imagen/habtipo/{{ $habtipo->foto }}" width="90px" height="90px" align="center"></td>
					<td><a href="{{ route( 'admin.habtipos.destroy', $habtipo->id ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> <a href="{{ route( 'admin.habtipos.edit', $habtipo->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $habtipos->render() !!}
	

	

@endsection