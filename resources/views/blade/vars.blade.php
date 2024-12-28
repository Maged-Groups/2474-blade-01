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

	<div class="container mt-5">

		Variable 1: {{ $var_1 }}
		<hr />
		Variable 2: {{ $var_2 }}
		<hr />
		Variable 2 as is: {!! $var_2 !!}
		<hr />
		Variable 3: {{ $var_3 }}
		<hr />
		Variable 3 as is: {!! $var_3 !!}

	</div>
</body>

</html>
