<?php

namespace JaOcero\TempestUi\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JaOcero\TempestUi\Services\InputCssBuilder;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public ?string $label = null,
        public ?string $placeholder = null,
        public string $type = 'text',
        public bool $required = false,
        public bool $disabled = false,
        public bool $readonly = false,
        public bool $autofocus = false,
        public bool $error = false,
        public ?string $value = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('tempestui::components.input', [
            'parentCss' => InputCssBuilder::parentCss(),
            'inputCss' => InputCssBuilder::inputCss($this->error),
            'labelCss' => InputCssBuilder::labelCss(),
        ]);
    }
}
