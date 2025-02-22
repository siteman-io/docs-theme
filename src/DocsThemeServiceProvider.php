<?php

namespace Siteman\DocsTheme;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Siteman\DocsTheme\Commands\DocsThemeCommand;

class DocsThemeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('docs-theme')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(DocsThemeCommand::class);
    }
}
