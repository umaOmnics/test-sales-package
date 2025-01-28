<?php

namespace Sales\TestSales;

use Illuminate\Support\ServiceProvider;

class TestSalesPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or package configurations here
    }

    public function boot()
    {
        // Load routes, views, migrations, etc.
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'yourpackage');
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('yourpackage.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }
}
