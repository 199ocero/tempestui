<p {{ $attributes->class([$titleCss]) }}>
    @if ($title)
        {{ $title }}
    @else
        {{ $slot }}
    @endif
</p>