@extends('layouts.layout_1')

@section('title', 'Components')

@section('content')

    <form class="d-flex flex-column gap-3 p-4">
        <h1>Register</h1>

        <x-input text='First Name' name='first_name' />

        <x-input text='Last Name' name='last_name' />

        <x-input text='Date of Birth' name='dob'  type='date'/>

        <x-select text='Country' name='country_id' :options='$countries' />

        <x-select text='Country' name='country_id' :options='$countries' />
    </form>


@endsection
