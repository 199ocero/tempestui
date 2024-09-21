<?php

namespace JaOcero\TempestUi;

use JaOcero\TempestUi\Components\Accordion\Accordion;
use JaOcero\TempestUi\Components\Accordion\AccordionContent;
use JaOcero\TempestUi\Components\Accordion\AccordionHeading;
use JaOcero\TempestUi\Components\Accordion\AccordionItem;
use JaOcero\TempestUi\Components\Button;
use JaOcero\TempestUi\Components\Input;
use JaOcero\TempestUi\Components\Layouts\Card;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TempestUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tempestui')
            ->hasViews()
            ->hasViewComponents('tempestui', ...[
                Card::class,
                Accordion::class,
                AccordionItem::class,
                AccordionHeading::class,
                AccordionContent::class,
                Button::class,
                Input::class,
            ]);
    }
}
