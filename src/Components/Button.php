<?php

namespace JaOcero\TempestUi\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Enums\Sizes;
use JaOcero\TempestUi\Enums\Variants;
use JaOcero\TempestUi\Services\ButtonCssBuilder;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = Variants::PRIMARY->value,
        public string $size = Sizes::MEDIUM->value,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.button', [
            'button' => ButtonCssBuilder::button($this->variant, $this->size),
            'buttonVariant' => ButtonCssBuilder::buttonVariant($this->variant),
            'buttonSize' => ButtonCssBuilder::buttonSize($this->size),
        ]);
    }
}
