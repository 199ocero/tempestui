<?php

namespace JaOcero\TempestUi\Services;

class AccordionCssBuilder
{
    public static function itemCss(): string
    {
        return 'border-b border-zinc-200 dark:border-zinc-800';
    }

    public static function contentCss(): string
    {
        return 'text-sm text-zinc-600 dark:text-zinc-400';
    }

    public static function headingCss(): string
    {
        return 'w-full text-left text-sm font-medium transition duration-150 ease-in-out flex justify-between items-center';
    }

    public static function headingDisabledCss(): string
    {
        return 'cursor-not-allowed text-zinc-400 dark:text-zinc-600';
    }

    public static function headingEnabledCss(): string
    {
        return 'text-zinc-900 dark:text-white hover:underline';
    }

    public static function headingIconCss(): string
    {
        return 'h-5 w-5 transform transition-transform duration-200';
    }

    public static function headingIconEnabledCss(): string
    {
        return 'text-zinc-900 dark:text-white rotate-180';
    }

    public static function headingIconDisabledCss(): string
    {
        return 'text-zinc-300 dark:text-zinc-600';
    }
}
