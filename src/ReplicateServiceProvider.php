<?php

namespace Sawirricardo\Replicate\Laravel;

use Sawirricardo\Replicate\Replicate as Client;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReplicateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-replicate')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $this->app->singleton(Replicate::class, static function () {
            return new Client(config('replicate.api_key'));
        });
    }
}
