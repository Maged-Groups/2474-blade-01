@extends('layouts.layout_2')

{{-- Section with default content and without @endsection directive --}}
@section('title', 'Page 4')

{{-- Section with body content and @endsection directive --}}
@section('content')
    <h1>Page 4</h1>
    <ul class="list-group">
        <li class="list-group-item">foreach / include VS. each</li>
    </ul>

    <div class="row">
        {{-- loop the categories and include category file --}}

        @foreach ($categories as $category)
            @include('includes.category')
        @endforeach

    </div>

    <hr>

    <div class="row">
        {{-- Loop using @each --}}

        @each('includes.category', $categories, 'category')
    </div>


    {{-- Disable layout section --}}
    @section('alert', '')

@endsection
