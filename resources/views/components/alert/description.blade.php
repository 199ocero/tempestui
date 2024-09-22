<p {{ $attributes->class([$descriptionCss]) }}>
    @if ($description)
        {{ $description }}
    @else
        {{ $slot }}
    @endif
</p>