@props([
    'type' => 'text',
    'name' => '',
    'isStack' => false,
    'text' => '',
    'boxStyle' => '',
])


@if ($isStack)
    <div class="input-group mb-3">
        <label for="{{ $name }}" class="input-group-text">{{ $text }}</label>
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-control">
    </div>
@else
    <div class="{{ $boxStyle }}">
        <label for="{{ $name }}" class="form-label">{{ $text }}</label>
        <input type="{{ $type }}" id="{{ $name }}" name="" class="form-control">
    </div>
@endif
