<div {{ $attributes->class([$parentCss]) }}>
    @if ($label)
        <label for="{{ $id }}" class="{{ $labelCss }}">
            {{ $label }}
            @if ($required)<span class="text-red-500 dark:text-red-400">*</span>@endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $id }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($required) required @endif
        @if ($disabled) disabled @endif
        @if ($readonly) readonly @endif
        @if ($autofocus) autofocus @endif
        @if ($value) value="{{ $value }}" @endif
        {{ $attributes->class([$inputCss]) }}
    >
</div>
