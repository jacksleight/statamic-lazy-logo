<?php

namespace JackSleight\StatamicLazyLogo\Http\Controllers\CP;

use Illuminate\Routing\Controller;
use Statamic\Support\Arr;

class AssetController extends Controller
{
    public function svg($type = 'default')
    {
        return response()
            ->view('statamic-lazy-logo::svg', [
                'params' => $this->getParams()[$type],
            ])
            ->header('Content-Type', 'image/svg+xml');
    }

    public function css()
    {
        return response()
            ->view('statamic-lazy-logo::css', [
                'params' => $this->getParams(),
            ])
            ->header('Content-Type', 'text/css');
    }

    private function getParams()
    {
        $default = array_merge(Arr::except(config('statamic.lazy_logo'), 'outside'), [
            'anchor' => 'start',
        ]);

        $outside = array_merge($default, config('statamic.lazy_logo.outside', []), [
            'anchor' => 'middle',
        ]);

        return [
            'default' => $default,
            'outside' => $outside,
        ];
    }
}
