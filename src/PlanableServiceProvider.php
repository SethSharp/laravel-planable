<?php

namespace SethSharp\LaravelPlanable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlanableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('sethsharp/laravel-planable')
            ->hasMigrations([]);
    }
}