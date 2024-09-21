<?php

namespace JaOcero\TempestUi\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Services\AccordionCssBuilder;

class AccordionHeading extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $heading = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.accordion.accordion-heading', [
            'headingCss' => AccordionCssBuilder::headingCss(),
            'headingDisabledCss' => AccordionCssBuilder::headingDisabledCss(),
            'headingEnabledCss' => AccordionCssBuilder::headingEnabledCss(),
            'headingIconCss' => AccordionCssBuilder::headingIconCss(),
            'headingIconEnabledCss' => AccordionCssBuilder::headingIconEnabledCss(),
            'headingIconDisabledCss' => AccordionCssBuilder::headingIconDisabledCss(),
        ]);
    }
}
