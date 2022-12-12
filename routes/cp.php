<?php

use JackSleight\StatamicLazyLogo\Http\Controllers\CP\AssetController;

Route::group([
    'prefix' => 'lazy-logo',
    'controller' => AssetController::class,
    'middleware' => ['cache.headers:max_age=31536000'],
    'excluded_middleware' => ['statamic.cp.authenticated'],
], function () {
    Route::get('nav.svg', 'svg')->defaults('type', 'nav');
    Route::get('outside.svg', 'svg')->defaults('type', 'outside');
    Route::get('cp.css', 'css');
});
