<div class="form-group">
    <label for="{{ $forLabel }}">{{ $name }}</label>
    <input id="{{ $forLabel }}" class="form-control" type="{{ $type ?? 'text' }}" name="{{ $forLabel }}"
        value="{{ old($forLabel, $value) }}">
</div>
