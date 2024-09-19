<?php

namespace JaOcero\TempestUi;

use JaOcero\TempestUi\Components\Button;
use JaOcero\TempestUi\Components\Input;
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
                Button::class,
                Input::class,
            ]);
    }
}
