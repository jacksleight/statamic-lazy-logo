<?php

use JackSleight\StatamicLazyLogo\Http\Controllers\CP\AssetController;

Route::group([
    'controller' => AssetController::class,
    'middleware' => ['cache.headers:max_age=31536000'],
    'excluded_middleware' => ['statamic.cp.authenticated'],
], function () {
    Route::get('lazy-logo.svg', 'svg');
    Route::get('lazy-logo-outside.svg', 'svg')->defaults('type', 'outside');
    Route::get('lazy-logo.css', 'css');
});
