<?php

namespace JaOcero\TempestUi\Services;

class InputCssBuilder
{
    public static function parentCss(): string
    {
        return 'grid w-full items-center gap-3';
    }

    public static function inputCss(bool $error): string
    {
        $baseCss = 'bg-white text-sm rounded-lg focus:ring-1 focus:outline-none block w-full px-3 py-2 dark:bg-zinc-900 dark:placeholder-zinc-500 dark:focus:ring-1 disabled:cursor-not-allowed disabled:opacity-70';

        $textColorCss = $error
            ? 'text-red-500 dark:text-red-400'
            : 'text-zinc-900 dark:text-white';

        $borderCss = $error
            ? 'border border-red-500 focus:ring-red-500 focus:border-red-500 dark:border-red-500 dark:focus:ring-red-500'
            : 'border border-zinc-200 focus:ring-zinc-900 focus:border-zinc-900 dark:border-zinc-800 dark:focus:ring-white';

        return $baseCss.' '.$textColorCss.' '.$borderCss;
    }

    public static function labelCss(): string
    {
        return 'text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-zinc-900 dark:text-zinc-100';
    }
}
