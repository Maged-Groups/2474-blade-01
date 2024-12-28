<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>@yield('title', 'My Company')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Fontawesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    {{--
    @env('local')
    <div class="opacity-50 sticky-top bg-danger">LOCAL DEV</div>
    @endenv
 --}}


    @include('includes.top-nav')

    <div class="alert alert-danger">This is a fixed alert from the layout, you cannot remove it.</div>


    <div class="alert alert-info">
        @section('alert')
            <p>This is the default alert from the layout</p>
        @show
    </div>

    <div class="container">

        @yield('content')

    </div>


    @section('footer')
        <footer class="bg-dark text-light sticky-bottom bottom-0 p-3 text-center">This is a layout Footer</footer>
    @show

</body>

</html>
