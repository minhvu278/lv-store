<div class="{{ $boxLabelClass ?? '' }}">
    <p class="{{ $labelClass ?? '' }} mb-0">{{ $label ?? '' }}</p>
    @if (isset($requiredLabel) && $requiredLabel)
        <div class="required-border {{ $requiredLabelClass ?? '' }}">{{ __('client/signup.required') }}</div>
    @endif
</div>
<div class="{{ $boxInputClass ?? '' }}">
    @if (isset($boxDescription) && $boxDescription)
        <div class="{{ $boxDescriptionClass ?? '' }}">
            <p>{!! $boxDescriptionText !!}</p>
        </div>
    @endif
    <textarea
        class="form-control custom__scroll {{ $inputClass ?? '' }}"
        id="{{ $inputId ?? '' }}"
        @if (isset($inputName) && $inputName) name="{{ $inputName }}" @endif
        @if (isset($placeholder) && $placeholder) placeholder="{{ $placeholder }}" @endif
        @if (isset($inputMaxLength) && $inputMaxLength) maxlength="{{ $inputMaxLength }}" @endif
        @required(isset($required) && $required)
        @disabled(isset($disabled) && $disabled)
        rows="{{ $rows ?? '4' }}"
    >{{ $inputValue ?? '' }}</textarea>
    @error($inputName ?? '')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @if (isset($inputSuggestion) && $inputSuggestion)
        <p class="mt-2 {{ $inputSuggestionClass ?? '' }}">{{ $inputSuggestionText }}</p>
    @endif
</div>
