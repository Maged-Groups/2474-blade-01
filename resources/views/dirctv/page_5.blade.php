@extends('layouts.layout_3')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>

        <ul class="list-group">
            <li class="list-group-item">while</li>
            <li class="list-group-item">continue</li>
            <li class="list-group-item">break</li>
            <li class="list-group-item">php</li>
        </ul>
    </div>
@endsection

@section('cols')
    <h2>Select Random Questions numbers Between 1 and 1000 questions in the Database</h2>
    <div class="my-3 col-6">
        <h2>Even</h2>
        <ul class="list-group">
            @for ($i = 0; $i < 100; $i++)
                {{-- create random number between 1 and 1000 --}}
                @php
                    $num = mt_rand(1, 1000);
                @endphp

                {{-- escape if odd --}}
                @if ($num % 2 !== 0)
                    @continue
                @endif

                <li class="list-group-item">{{ $num }}</li>
            @endfor
        </ul>
    </div>

    <div class="my-3 col-6">
        <h2>Odd</h2>
        <ul class="list-group">
            @for ($i = 0; $i < 100; $i++)
                {{-- create random number between 1 and 1000 --}}
                @php
                    $num = mt_rand(1, 1000);
                @endphp
                {{-- escape if even --}}

                @if ($num % 2 === 0)
                    @continue
                @endif

                <li class="list-group-item">{{ $num }}</li>
            @endfor
        </ul>

    </div>

    <div class="my-3 col-6">
        <h2>10 Even</h2>
        <ul class="list-group">
            @php
                $even_counter = 0;
            @endphp

            @while ($even_counter < 10)
                @php
                    $num = rand(1, 1000);
                @endphp

                @continue($num % 2 !== 0)

                <li class="list-group-item">{{ ++$even_counter }}: {{ $num }}</li>


                @break($even_counter == 10)

            @endwhile
        </ul>
    </div>

    <div class="my-3 col">
        @php
            $odd_counter = 0;
        @endphp

        <h2>10 Odd</h2>
        <ul class="list-group">
            @for ($i = 0; $i < 100; $i++)
                @php
                    $num = rand(1, 1000);
                @endphp

                @continue($num % 2 === 0)

                <li class="list-group-item">{{ ++$odd_counter }}: {{ $num }}</li>

                @break($odd_counter == 10)
            @endfor
        </ul>

    </div>
@endsection
