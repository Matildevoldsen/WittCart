<?php

namespace Matildevoldsen\WittCart;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Matildevoldsen\WittCart\Commands\WittCartCommand;

class WittCartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wittcart')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wittcart_table')
            ->hasCommand(WittCartCommand::class);
    }
}
