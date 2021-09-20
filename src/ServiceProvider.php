<?php

namespace JackSleight\LazyLogo;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/lazy-logo.php' => config_path('lazy-logo.php'),
        ], 'lazy-logo-config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lazy-logo');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}