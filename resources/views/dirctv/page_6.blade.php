@extends('layouts.layout_4')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>

        <ul class="list-group">
            <li class="list-group-item">$loop->first</li>
            <li class="list-group-item">$loop->last</li>
            <li class="list-group-item">class</li>
        </ul>
    </div>

    <ul class="list-group my-4">
        @foreach ($children as $child)
            <li class="list-group-item">{{ $loop->iteration }} - {{ $child['name'] }}</li>
        @endforeach
    </ul>




    <ul class="list-group">
        @foreach ($children as $child)
            @if ($loop->first)
                <li class="list-group-item list-group-item-success">
                    First Child: {{ $child['name'] }} - {{ $child['age'] }} Years Old
                </li>
            @elseif($loop->last)
                <li class="list-group-item list-group-item-dark">
                    Last Child: {{ $child['name'] }} - {{ $child['age'] }} Years Old
                </li>
            @else
                <li class="list-group-item">
                    {{ $child['name'] }} - {{ $child['age'] }} Years Old
                </li>
            @endif
        @endforeach
    </ul>

    <ul class="mt-4 list-group">
        @foreach ($children as $child)
            <li
                class="list-group-item {{ $loop->first ? 'list-group-item-success' : ($loop->last ? 'list-group-item-dark' : '') }}">
                @if ($loop->first)
                    First Child:
                @elseif($loop->last)
                    Last Child:
                @endif
                {{ $child['name'] }} - {{ $child['age'] }} Years Old
            </li>
        @endforeach
    </ul>

    <ul class="mt-4 list-group">
        @foreach ($children as $child)
            <li @class([
                'list-group-item',
                'list-group-item-success' => $loop->first,
                'list-group-item-dark' => $loop->last,
            ])>
                @if ($loop->first)
                    First Child:
                @elseif($loop->last)
                    Last Child:
                @endif
                {{ $child['name'] }} - {{ $child['age'] }} Years Old
            </li>
        @endforeach
    </ul>
@endsection
