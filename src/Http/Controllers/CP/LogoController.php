<?php

namespace JackSleight\StatamicLazyLogo\Http\Controllers\CP;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogoController extends Controller
{
    public function __invoke(Request $request)
    {
        return response()
            ->view('statamic-lazy-logo::svg')
            ->header('Content-Type', 'image/svg+xml');
    }
}
