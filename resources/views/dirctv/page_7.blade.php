@extends('layouts.layout_4')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>

        <ul class="list-group">
            <li class="list-group-item">$loop->depth</li>
            <li class="list-group-item">$loop->even</li>
            <li class="list-group-item">$loop->odd</li>
            <li class="list-group-item">$loop->parent</li>
            <li class="list-group-item">$loop->index</li>
            <li class="list-group-item">$loop->iteration</li>
            <li class="list-group-item">$loop->remaining</li>
            <li class="list-group-item">$loop->count</li>
        </ul>
    </div>

    <h2 class="p-2 text-bg-dark">2 Levels</h2>
    @foreach ($employees as $employee)
        <h2 class="text-center custom_title">{{ $employee['name'] }} - Level: {{ $loop->depth }}</h2>
        <div class="p-3">
            <h3 class="alert alert-info">Skills</h3>
            <ul class="list-group">
                @foreach ($employee['skills'] as $skill)
                    <li @class([
                        'list-group-item',
                        'list-group-item-danger' => $loop->even,
                        'list-group-item-warning' => $loop->odd,
                    ])>
                        @if ($loop->parent->first && $loop->first)
                            <i class="fa fa-arrow-right"></i>
                        @endif

                        @if ($loop->last)
                            (THIS IS LAST)
                        @endif

                        @if ($loop->parent->last)
                            (LAST EMPLOYEE)
                        @endif

                        <span>
                            Index: {{ $loop->index }} - Item: {{ $loop->iteration }} - {{ $skill }} -> Remaining
                            {{ $loop->remaining }} of
                            {{ $loop->count }} - Level: {{ $loop->depth }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach

    <h2 class="p-2 text-bg-dark">3 Levels</h2>

    @foreach ($employees2 as $employee)
        <h2 class="text-center custom_title">{{ $employee['name'] }} - Level: {{ $loop->depth }}</h2>
        <div class="p-3">
            <h3 class="alert alert-info">Skills</h3>
            @foreach ($employee['skills'] as $skill => $languages)
                <h4 class="alert alert-info">{{ $skill }} - Level: {{ $loop->depth }}</h4>
                <ul class="list-group">
                    @foreach ($languages as $language)
                        <li @class([
                            'list-group-item',
                            'list-group-item-danger' => $loop->even,
                            'list-group-item-warning' => $loop->odd,
                        ])>
                            @if ($loop->parent->first && $loop->first)
                                <i class="fa fa-arrow-right"></i>
                            @endif
                            <span>
                                Index: {{ $loop->index }} - Item: {{ $loop->iteration }} - {{ $language }} ->
                                Remaining {{ $loop->remaining }} of
                                {{ $loop->count }} - Level: {{ $loop->depth }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    @endforeach
@endsection
