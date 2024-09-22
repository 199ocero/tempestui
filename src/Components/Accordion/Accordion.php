<?php

namespace JaOcero\TempestUi\Components\Accordion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public bool $card = false,
        public bool $collapsible = false,
        public bool $disabled = false,
        public bool $expanded = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.accordion.index');
    }
}
