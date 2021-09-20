![Statamic](https://flat.badgen.net/badge/Statamic/3.1+/FF269E)
![Packagist version](https://flat.badgen.net/packagist/v/jacksleight/lazy-logo)
![License](https://flat.badgen.net/github/license/jacksleight/lazy-logo)

# Lazy Logo 

This Statamic addon automatically generates a control panel logo image based on the `statamic.cp.custom_cms_name` config value. Handy if you just need a quick way to see which site you're editing at a glance. 

> **Important:** This addon uses Statamic's white labeling feature, which is Pro only. Therefore this addon will only work with the Pro edition.

## Installation

Install the addon using Composer:

```bash
composer require jacksleight/lazy-logo
```

Set the `custom_logo_url` in `config/statamic/cp.php` to `/!/lazy-logo.svg`:

```php
'custom_logo_url' => env('STATAMIC_CUSTOM_LOGO_URL', '/!/lazy-logo.svg'),
```

That's it!

By default the logo will be styled to match the CP text style. If you want to customise it you can publish and edit the config:

```bash
php please vendor:publish --tag=lazy-logo-config
```

Open `config/lazy-logo.php` and make your changes:

```php
return [

    'color'       => '#19292f',
    // 'gradient'    => ['#F94F57', '#12c2e9'],
    'font_family' => 'Inter UI,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue',
    'font_size'   => '22px',
    'font_weight' => 'normal',

];
```

If you set a `gradient` it will override the `color`.