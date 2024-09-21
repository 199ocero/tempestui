@props(['content' => null])

<div
    x-data="{contentDisabled: parentDisabled ? true : itemDisabled ? true : false}"
    x-init="itemExpanded ? toggleAccordion(itemIndex) : null;"
    x-show="isAccordionActive(itemIndex) && !contentDisabled"
    x-collapse
    {{ $attributes }}
>
    <div {{ $attributes->class([$contentCss]) }}
         :class="{ 'pb-3': itemIndex !== itemCount - 1, 'pt-3': itemIndex === itemCount - 1 }"
    >
        @if ($content)
            {{ $content }}
        @else
            {{ $slot }}
        @endif
    </div>
</div>