@props(['heading' => null, 'content' => null])

<div 
    x-init="itemCount++"
    x-data="{ itemIndex: itemCount, itemDisabled: @js($disabled), itemExpanded: @js($expanded) }"
    :class="{ @js($itemCss): itemIndex !== itemCount - 1 }"
    {{ $attributes }}
>
    @if($heading)
        <x-tempestui-accordion-heading :heading="$heading" />
    @endif
    
    @if($slot->isEmpty() && $content)
        <x-tempestui-accordion-content>{{ $content }}</x-tempestui-accordion-content>
    @else
        {{ $slot }}
    @endif
</div>