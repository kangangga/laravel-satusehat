<?php

namespace Kangangga\Satusehat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SatusehatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-satusehat')
            ->hasConfigFile();
    }

    public function registeringPackage(): void
    {
        # code...
    }

    public function packageRegistered(): void
    {
        $this->app->bind(Satusehat::class, function () {
            return new Satusehat(
                new Config(
                    'asd',
                    'asdasd'
                )
            );
        });
    }

    public function bootingPackage(): void
    {
        # code...
    }

    public function packageBooted(): void
    {
        # code...
    }
}
