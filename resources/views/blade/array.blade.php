<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">

	<title>Title</title>

	{{-- Bootstrap --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    @include('includes.top-nav')


	<div class="container">

		var 1: {{ $arr['var_1'] }}
		<hr />
		var 2: {{ $arr['var_2'] }}
		<hr />
		var 2 as is: {!! $arr['var_2'] !!}
		<hr />
		var 3: {{ $arr['var_3'] }}
		<hr />
		var 3 as is: {!! $arr['var_3'] !!}
		<hr />
	</div>
</body>

</html>
