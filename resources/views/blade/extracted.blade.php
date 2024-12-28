<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>Title</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    @php
        extract($array);

    @endphp



    @include('includes.top-nav')

    <div class="container">



        Var 1: {{ $var_1 }}
        <hr />
        Var 2: {{ $var_2 }}
        <hr />
        Var 2 as is: {!! $var_2 !!}
        <hr />
        var 3: {{ $array['var_3'] }}
        <hr />
        var 3 as is: {!! $array['var_3'] !!}
        <hr />
        Use Js::from class facade to generate a JSON.parse JS array from PHP array instead of using json_encode function

        <div id="items"></div>

        <script>
            const items = {{ Js::from($var_4) }};
            console.log(items);

            Object.values(items).forEach(item => {
                document.getElementById('items').innerHTML += `<h3>${item}</h3>`;
            })
        </script>

        <script>
            const json = {{ Js::from($array) }}
            console.log(json)
        </script>

        <hr />
    </div>
</body>

</html>
