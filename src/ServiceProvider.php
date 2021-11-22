<?php

namespace JackSleight\StatamicLazyLogo;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'web' => __DIR__.'/../routes/web.php',
        'cp'  => __DIR__.'/../routes/cp.php',
    ];

    protected $updateScripts = [
        \JackSleight\StatamicLazyLogo\Updates\UpdateConfigFilename::class,
    ];

    public function register()
    {
        parent::register();

        $this->mergeConfigFrom(
            __DIR__.'/../config/statamic/lazy_logo.php', 'statamic.lazy_logo',
        );
    }

    public function boot()
    {
        parent::boot();

        $this->publishes([
            __DIR__.'/../config/statamic/lazy_logo.php' => config_path('statamic/lazy_logo.php'),
        ], 'statamic-lazy-logo-config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'statamic-lazy-logo');
    }
}
