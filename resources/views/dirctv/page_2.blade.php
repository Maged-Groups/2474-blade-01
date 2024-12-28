@extends('layouts.layout_3')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>

        <ul class="list-group">
            <li class="list-group-item">hasSection</li>
            <li class="list-group-item">sectionMissing</li>
        </ul>
    </div>
@endsection

@section('cols')
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Body</div>
            <div class="card-footer">Footer</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Body</div>
            <div class="card-footer">Footer</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Body</div>
            <div class="card-footer">Footer</div>
        </div>
    </div>
@endsection

@section('slider')
    <div class="row">
        <div class="col bg-warning">Slide</div>
        <div class="col bg-info">Slide</div>
        <div class="col bg-warning">Slide</div>
        <div class="col bg-info">Slide</div>
        <div class="col bg-warning">Slide</div>
        <div class="col bg-info">Slide</div>
        <div class="col bg-warning">Slide</div>
        <div class="col bg-info">Slide</div>
        <div class="col bg-warning">Slide</div>
        <div class="col bg-info">Slide</div>
    </div>
@endsection


@section('errors')
    <p class="">Lorem, ipsum dolor.</p>
    <p class="">Quod, praesentium hic?</p>
    <p class="">Dolorum, aliquid odio?</p>
    <p class="">Est, unde ullam.</p>
    <p class="">Illum, pariatur aliquam.</p>
    <p class="">Vero, ex doloremque?</p>
    <p class="">Nostrum, optio voluptates?</p>
    <p class="">Corrupti, beatae temporibus.</p>
    <p class="">Eum, neque amet.</p>
    <p class="">Nihil, assumenda ducimus.</p>
@endsection
