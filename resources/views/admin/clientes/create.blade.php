@extends('admin.template.main')

@section('title', 'Crear Cliente')

@section('content')
	<form method="POST" action="http://localhost/admin/clientes">
		<div class="form-group">
			<label>Nombre</label>
		</div>
	</form>
@endsection
