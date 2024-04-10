<?php

namespace SethSharp\LaravelPlanable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('sethsharp/laravel-planable')
            ->hasMigrations([]);
    }
}