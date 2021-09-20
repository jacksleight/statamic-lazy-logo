<?php

Route::get('/!/lazy-logo.svg', function () {
    return response()
        ->view('lazy-logo::svg')
        ->header('Content-Type', 'image/svg+xml');
});
