<?php

namespace JaOcero\TempestUi\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Services\AlertCssBuilder;

class AlertTitle extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.alert.title', [
            'titleCss' => AlertCssBuilder::titleCss(),
        ]);
    }
}
