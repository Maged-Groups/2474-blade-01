@props([
    'name' => '',
    'isStack' => false,
    'text' => '',
    'boxStyle' => '',
    'options' => [],
])


@if ($isStack)
    <div class="input-group mb-3">
        <label for="{{ $name }}" class="input-group-text">{{ $text }}</label>

        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
            @foreach ($options as $option)
                <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
            @endforeach
        </select>
    </div>
@else
    <div class="{{ $boxStyle }}">
        <label for="{{ $name }}" class="form-label">{{ $text }}</label>
        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
            @foreach ($options as $option)
                <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
            @endforeach
        </select>
    </div>
@endif
