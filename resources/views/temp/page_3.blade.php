@extends('layouts.layout_2')


@section('alert')
    <p>This is the child alert before parent alert</p>
    @parent
    <p>This is the child alert after parent alert</p>
@endsection


@section('footer')
    <footer class="text-bg-success p-3">
        This is my page's new fotter. parent footer removed
    </footer>
@endsection



@section('content')
    <h1>Page 3</h1>
    <ul class="list-group">
        <li class="list-group-item">parent</li>
        <li class="list-group-item">includeWhen</li>
        <li class="list-group-item">includeUnless</li>
        <li class="list-group-item">includeIf</li>
        <li class="list-group-item">includeFirst</li>
    </ul>

    @if (isset($orders))
        @include('includes.orders')
    @else
        @include('includes.not-orders')
    @endif


    {{-- include the orders component --}}
    @includewhen($orders, 'includes.orders')

    {{-- include the not-orders component --}}
    @includeUnless($orders, 'includes.not-orders')

    {{-- include the file if it exists --}}
    @includeIf('includes.footer-social')


    {{-- includes the first found component --}}
    @includeFirst(['includes.floating-add-1', 'includes.floating-add-2', 'includes.floating-add-3', 'includes.no-adds'])

@endsection
