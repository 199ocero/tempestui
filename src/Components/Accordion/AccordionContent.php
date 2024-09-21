<?php

namespace JaOcero\TempestUi\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Services\AccordionCssBuilder;

class AccordionContent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $content = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.accordion.accordion-content', [
            'contentCss' => AccordionCssBuilder::contentCss(),
        ]);
    }
}
