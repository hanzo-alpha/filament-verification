<?php

namespace HanzoAlpha\FilamentVerification;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentVerificationServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-verification';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-verification' => __DIR__ . '/../resources/dist/filament-verification.css',
    ];

    protected array $scripts = [
        'plugin-filament-verification' => __DIR__ . '/../resources/dist/filament-verification.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-verification' => __DIR__ . '/../resources/dist/filament-verification.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
