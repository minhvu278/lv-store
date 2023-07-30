<input type="{{ $type ?? 'text' }}"
    id="{{ $id ?? '' }}"
    class="form-control @error($name ?? '') is-invalid @enderror {{ $class ?? '' }}"
    @if (isset($name) && $name) name="{{ $name }}" @endif
    @if (isset($placeholder) && $placeholder) placeholder="{{ $placeholder }}" @endif
    value="{{ old($name ?? '', $value ?? '') }}"
    @if (isset($maxLength) && $maxLength) maxlength="{{ $maxLength }}" @endif
    @required(isset($required) && $required)
    @disabled(isset($disabled) && $disabled)
>
@error($name ?? '')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
@if ($suggestionText)
    <p class="mt-2 {{ $suggestionClass ?? '' }}">{!! $suggestionText !!}</p>
@endif
