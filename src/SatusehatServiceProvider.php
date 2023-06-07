<?php

namespace Kangangga\Satusehat;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Kangangga\Satusehat\Http\Request;
use Illuminate\Contracts\Foundation\Application;

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
        // code...
    }

    public function packageRegistered(): void
    {
        $this->app->bind(Config::class, function (Application $app) {
            return new Config(
                $app['config']['satusehat.client_id'],
                $app['config']['satusehat.client_secret'],
                $app['config']['satusehat.organization_id'],
            );
        });

        $this->app->bind(Satusehat::class, function (Application $app) {
            return new Satusehat(
                $app->make(Config::class),
            );
        });

        $this->app->tag([
            Config::class,
        ], 'satusehat@config');
    }

    public function bootingPackage(): void
    {
        // code...
    }

    public function packageBooted(): void
    {
        // code...
    }
}
