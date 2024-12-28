@extends('layouts.layout_1')

{{-- Section with default content and without @endsection directive --}}


{{-- Section with body content and @endsection directive --}}
@section('content')
    <h1>Page 1</h1>
    <ul class="list-group">
        <li class="list-group-item">include</li>
        <li class="list-group-item">layouts</li>
        <li class="list-group-item">extends</li>
        <li class="list-group-item">yield</li>
        <li class="list-group-item">section with default content</li>
        <li class="list-group-item">section with content</li>
    </ul>
@endsection

{{-- another Section with body content and @endsection directive --}}
@section('info-box')
    This is my info in this page
@endsection


@section('page_title', 'Page 1 Title | Welcome to my website')
