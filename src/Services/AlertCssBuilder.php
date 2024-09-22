<?php

namespace JaOcero\TempestUi\Services;

use JaOcero\TempestUi\Enums\Variants;

class AlertCssBuilder
{
    public static ?string $variant = null;

    public function __construct($variant = null)
    {
        self::$variant = $variant;
    }

    public static function make(?string $variant = null): self
    {
        return new self($variant);
    }

    public static function parentCss(): string
    {
        $baseCss = 'bg-white dark:bg-zinc-900 border flex gap-2 w-full px-4 py-3 rounded-lg';

        if (self::$variant && self::$variant === Variants::DESTRUCTIVE->value) {
            return 'border-red-400 dark:border-red-500 '.$baseCss;
        }

        return 'border-zinc-200 dark:border-zinc-800 '.$baseCss;
    }

    public static function iconCss(): string
    {
        $baseCss = 'w-5 h-5';

        if (self::$variant && self::$variant === Variants::DESTRUCTIVE->value) {
            return 'text-red-600 dark:text-red-400 '.$baseCss;
        }

        return 'text-zinc-900 dark:text-white '.$baseCss;
    }

    public static function contentCss(): string
    {
        return 'grid gap-1';
    }

    public static function titleCss(): string
    {
        $baseCss = 'text-sm font-semibold leading-none tracking-tight';

        if (self::$variant && self::$variant === Variants::DESTRUCTIVE->value) {
            return 'text-red-600 dark:text-red-400 '.$baseCss;
        }

        return 'text-zinc-900 dark:text-white '.$baseCss;
    }

    public static function descriptionCss(): string
    {
        $baseCss = 'text-sm leading-relaxed ';

        if (self::$variant && self::$variant === Variants::DESTRUCTIVE->value) {
            return 'text-red-600 dark:text-red-400 '.$baseCss;
        }

        return 'text-zinc-900 dark:text-white '.$baseCss;
    }
}
