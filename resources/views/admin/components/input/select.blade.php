<div class="col-md-6 col-sx-12 pt-3">
    <div class="{{ $boxLabelClass ?? '' }}">
        <p class="m-0 {{ $labelClass ?? '' }}">{{ $label ?? '' }}</p>
        @if (isset($requiredLabel) && $requiredLabel)
            <div class="required-border">{{ __('client/signup.required') }}</div>
        @endif
    </div>
    <div class="{{ $boxSelectClass ?? '' }}">
        <select
                class="form-select {{ $selectClass ?? '' }}"
                id="{{ $selectId ?? '' }}"
                @if (isset($selectName) && $selectName) name="{{ $selectName }}" @endif
                @if (isset($placeholder) && $placeholder) placeholder="{{ $placeholder }}" @endif
                @required(isset($required) && $required)
                @disabled(isset($disabled) && $disabled)
        >
            <option value="" class="fst-italic">{{ $optionDefault ?? __('client/signup.selected_default') }}</option>

            @if (isset($options) && $options)
                @foreach ($options as $value => $text)
                    <option
                            value="{{ $value }}"
                            @selected($value === old($selectName))
                            @if (isset($selectValue) && $value === $selectValue) selected @endif
                    >
                        {{ $text }}
                    </option>
                @endforeach
            @endif
        </select>
        @error($selectName ?? '')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>