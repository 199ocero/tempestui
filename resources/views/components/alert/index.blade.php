<div {{ $attributes->class([$parentCss]) }}>
    <div {{ $attributes->class([$iconCss]) }}>
        {{ $icon ?? null }}
    </div>
    <div {{ $attributes->class([$contentCss]) }}>
        {{ $slot }}
    </div>
</div>