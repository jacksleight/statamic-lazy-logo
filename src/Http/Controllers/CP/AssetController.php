<?php

namespace JackSleight\StatamicLazyLogo\Http\Controllers\CP;

use Illuminate\Routing\Controller;
use Statamic\Support\Arr;

class AssetController extends Controller
{
    public function svg($type)
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
        $config = config('statamic.lazy_logo');

        $default = array_merge(Arr::except($config, 'outside'), [
            'anchor' => 'start',
        ]);

        $outside = array_merge($default, Arr::get($config, 'outside', []), [
            'anchor' => 'middle',
        ]);

        return [
            'nav' => $default,
            'outside' => $outside,
        ];
    }
}
