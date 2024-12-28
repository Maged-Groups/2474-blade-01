<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">

	<title>@yield('title')</title>

	{{-- Bootstrap --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	{{-- Fontawesome --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	{{-- Custom CSS --}}
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>

<body>
	@include('includes.top-nav')

	<div class="container">

		@yield('content')

	</div>
</body>

</html>
