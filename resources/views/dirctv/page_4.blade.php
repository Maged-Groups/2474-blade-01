@extends('layouts.layout_4')

@section('content')
    <div class=" my-4">
        <h2>Topics</h2>

        <ul class="list-group">
            <li class="list-group-item">for loop</li>
        </ul>

        <x-card title='Item A'>
            <h5>Card Body Content</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem veniam quis quidem molestias numquam esse
                aliquam. In, voluptas magni. Animi molestias velit sequi vitae ratione! Ab dicta voluptatibus iure dolorem?
            </p>
        </x-card>

        <x-card title='Item B' />
        <x-card />


        <div>
            @for ($i = 1; $i <= $children; $i++)
                <x-input isStack="{{ true }}" text='Child Name' type='text' boxStyle='p-2 border my-3' />
            @endfor
        </div>

    </div>
@endsection
