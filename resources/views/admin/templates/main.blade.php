<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>@yield('title', 'Default') Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('admin.templates.partials.nav')

	<section>
		@yield('section')
	</section>

	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>