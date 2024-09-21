@props(['heading' => null])

<button
    x-data="{
        headingDisabled: parentDisabled ? true : itemDisabled ? true : false
    }"
    @click="!headingDisabled && toggleAccordion(itemIndex)"
    {{ $attributes->class([$headingCss]) }}
    :class="{
        'pb-3': itemIndex === 0,
        'pt-3': itemIndex === itemCount - 1,
        'py-3': itemIndex > 0 && itemIndex < itemCount - 1,
        @js($headingDisabledCss): headingDisabled,
        @js($headingEnabledCss): !headingDisabled,
    }"
    :aria-disabled="headingDisabled"
>
    @if ($heading)
        {{ $heading }}
    @else
        {{ $slot }}
    @endif
    <svg 
        class="{{ $headingIconCss }}"
        :class="{ 
            @js($headingIconEnabledCss): isAccordionActive(itemIndex) && !headingDisabled,
            @js($headingIconDisabledCss): !isAccordionActive(itemIndex) || headingDisabled 
        }"
        xmlns="http://www.w3.org/2000/svg" 
        viewBox="0 0 20 20" 
        fill="currentColor"
    >
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</button>