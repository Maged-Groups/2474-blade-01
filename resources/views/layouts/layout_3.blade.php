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
</head>

<body>
	@include('includes.top-nav')

	<div class="container">

		@yield('content')

		@section('alert')
			<div class="alert alert-info">This is an alert from the layout</div>
		@show

		@hasSection('cols')
			<div class="row">
				@yield('cols')
			</div>
		@endif


        @hasSection('errors')
            <div class="border-3 border-danger p-3 rounded-3 alert alert-danger">
                <h4>The Errors List</h4>
                @yield('errors')
            </div>
        @endif



		@yield('slider')

		@sectionMissing('slider')
			<div class="alert alert-warning">
				<h2>Default Slider</h2>
				<div class="row">
					<div class="col bg-danger text-light">Slide</div>
					<div class="col bg-primary text-light">Slide</div>
					<div class="col bg-danger text-light">Slide</div>
					<div class="col bg-primary text-light">Slide</div>
					<div class="col bg-danger text-light">Slide</div>
					<div class="col bg-primary text-light">Slide</div>
					<div class="col bg-danger text-light">Slide</div>
					<div class="col bg-primary text-light">Slide</div>
				</div>
			</div>
		@endif

		@section('footer')
			<footer class="bg-dark text-light sticky-bottom bottom-0 p-3 text-center">This is a layout Footer</footer>
		@show
	</div>
</body>

</html>
