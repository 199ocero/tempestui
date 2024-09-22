<?php

namespace JaOcero\TempestUi\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Services\AlertCssBuilder;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $variant = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $alertCssBuilder = AlertCssBuilder::make($this->variant);

        return view('tempestui::components.alert.index', [
            'parentCss' => $alertCssBuilder->parentCss(),
            'iconCss' => $alertCssBuilder->iconCss(),
            'contentCss' => $alertCssBuilder->contentCss(),
        ]);
    }
}
