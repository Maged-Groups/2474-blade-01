@props([
    'title' => 'Card Title',
    'content' => 'Default Content'
])


<div class="card my-4 shadow">
    <div class="card-header">
        <h3>{{ $title }}</h3>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <div class="card-footer">
        Footer
    </div>
</div>
