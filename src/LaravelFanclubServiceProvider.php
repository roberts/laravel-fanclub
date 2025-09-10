<?php

namespace Roberts\LaravelFanclub;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Roberts\LaravelFanclub\Commands\LaravelFanclubCommand;

class LaravelFanclubServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-fanclub')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_fanclub_table')
            ->hasCommand(LaravelFanclubCommand::class);
    }
}
