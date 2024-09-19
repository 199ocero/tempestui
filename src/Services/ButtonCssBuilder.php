<?php

namespace JaOcero\TempestUi\Services;

use JaOcero\TempestUi\Enums\Sizes;
use JaOcero\TempestUi\Enums\Variants;

class ButtonCssBuilder
{
    public static function button(string $variant): string
    {
        return match ($variant) {
            Variants::PRIMARY->value => 'tempestui-button-primary font-medium rounded-lg',
            Variants::SECONDARY->value => 'tempestui-button-secondary font-medium rounded-lg',
            Variants::DESTRUCTIVE->value => 'tempestui-button-destructive font-medium rounded-lg',
            Variants::OUTLINE->value => 'tempestui-button-outline font-medium rounded-lg',
            Variants::GHOST->value => 'tempestui-button-ghost font-medium rounded-lg',
            Variants::LINK->value => 'tempestui-button-link font-medium rounded-lg',
            default => 'tempestui-button-primary font-medium rounded-lg',
        };
    }

    public static function buttonVariant(string $variant): string
    {
        return match ($variant) {
            Variants::PRIMARY->value => 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:bg-zinc-800 dark:hover:bg-zinc-200 transition duration-300 ease-in-out',
            Variants::SECONDARY->value => 'bg-zinc-100 hover:bg-zinc-100/60 dark:bg-zinc-800 text-zinc-900 dark:text-white dark:hover:bg-zinc-800/60 transition duration-300 ease-in-out',
            Variants::DESTRUCTIVE->value => 'bg-red-500 dark:bg-red-800 text-white hover:bg-red-500/90 dark:hover:bg-red-900 transition duration-300 ease-in-out',
            Variants::OUTLINE->value => 'bg-transparent text-zinc-900 dark:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 transition duration-300 ease-in-out border border-zinc-300 dark:border-zinc-800',
            Variants::GHOST->value => 'bg-transparent text-zinc-900 dark:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 transition duration-300 ease-in-out',
            Variants::LINK->value => 'text-zinc-900 dark:text-white hover:underline hover:underline-offset-4 transition duration-300 ease-in-out',
            default => 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:bg-zinc-800 dark:hover:bg-zinc-200 transition duration-300 ease-in-out',
        };
    }

    public static function buttonSize(string $size): string
    {
        return match ($size) {
            Sizes::SMALL->value => 'text-xs px-4 py-2',
            Sizes::MEDIUM->value => 'text-sm px-4 py-2',
            Sizes::LARGE->value => 'text-base px-4 py-2',
            default => 'text-sm px-4 py-2',
        };
    }
}
