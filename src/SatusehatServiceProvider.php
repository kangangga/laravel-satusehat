<?php

namespace Kangangga\Satusehat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kangangga\Satusehat\Commands\SatusehatCommand;

class SatusehatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-satusehat')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-satusehat_table')
            ->hasCommand(SatusehatCommand::class);
    }
}
