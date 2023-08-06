<div class="col-md-6 col-sx-12 pt-3">
    <div class="{{ $boxLabelClass ?? '' }}">
        <p class="m-0 {{ $labelClass ?? '' }}">{{ $label ?? '' }}</p>
        @if (isset($requiredLabel) && $requiredLabel)
            <div class="required-border">{{ __('client/signup.required') }}</div>
        @endif
    </div>
    @include('admin.components.input.single_input', [
        'type' => $inputType ?? '',
        'id' => $inputId ?? '',
        'class' => $inputClass ?? '',
        'name' => $inputName ?? '',
        'placeholder' => $placeholder ?? '',
        'value' => $inputValue ?? '',
        'maxLength' => $inputMaxLength ?? '',
        'required' => $required ?? false,
        'disabled' => $disabled ?? false,
        'boxClass' => $boxInputClass ?? '',
        'suggestion' => $inputSuggestion ?? false,
        'suggestionClass' => $inputSuggestionClass ?? '',
        'suggestionText' => $inputSuggestionText ?? ''
    ])
</div>