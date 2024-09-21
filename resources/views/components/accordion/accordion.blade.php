<div
    x-data="{
        activeAccordions: [],
        itemCount: 0,
        type: @js($type),
        collapsible: @js($collapsible),
        parentDisabled: @js($disabled),
        expanded: @js($expanded),
        initialExpanded: @js($expanded),
        initializeAccordions() {
            if (this.initialExpanded) {
                this.$nextTick(() => {
                    this.activeAccordions = [...Array(this.itemCount).keys()];
                });
            }
        },
        toggleAccordion(index) {
            if (this.type === 'single') {
                if (this.activeAccordions.includes(index)) {
                    this.activeAccordions = this.activeAccordions.filter(i => i !== index);
                } else {
                    if (this.collapsible) {
                        this.activeAccordions = [index];
                    } else {
                        if (!this.activeAccordions.includes(index)) {
                            this.activeAccordions.push(index);
                        }
                    }
                }
            } else {
                if (this.activeAccordions.includes(index)) {
                    this.activeAccordions = this.activeAccordions.filter(i => i !== index);
                } else {
                    this.activeAccordions.push(index);
                }
            }
            this.expanded = false;
        },
        isAccordionActive(index) {
            return this.expanded || this.activeAccordions.includes(index);
        }
    }"
    x-init="initializeAccordions()"
    :class="{ 'opacity-70': parentDisabled }"
    {{ $attributes }}
>
    @if ($card)
        <x-tempestui-card>
            {{ $slot }}
        </x-tempestui-card>
    @else
        {{ $slot }}
    @endif
</div>