<?php

$response = function () {
    return response()
        ->view('statamic-lazy-logo::svg')
        ->header('Content-Type', 'image/svg+xml');
};

Route::get('/!/statamic-lazy-logo.svg', $response);
Route::get('/!/lazy-logo.svg', $response); // @deprecated
