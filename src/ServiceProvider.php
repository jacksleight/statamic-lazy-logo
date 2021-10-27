<?php

namespace JackSleight\StatamicLazyLogo;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'web' => __DIR__.'/../routes/web.php',
    ];

    public function register()
    {
        parent::register();

        $this->mergeConfigFrom(
            __DIR__ . '/../config/statamic/lazy-logo.php', 'statamic.lazy-logo',
        );
    }

    public function boot()
    {
        parent::boot();

        $this->publishes([
            __DIR__ . '/../config/statamic/lazy-logo.php' => config_path('statamic/lazy-logo.php'),
        ], 'statamic-lazy-logo-config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'statamic-lazy-logo');
    }
}