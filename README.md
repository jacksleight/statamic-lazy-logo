<!-- statamic:hide -->

![Statamic](https://flat.badgen.net/badge/Statamic/3.1+/FF269E)
![Packagist version](https://flat.badgen.net/packagist/v/jacksleight/statamic-lazy-logo)
![License](https://flat.badgen.net/github/license/jacksleight/statamic-lazy-logo)

# Lazy Logo 

<!-- /statamic:hide -->

This Statamic addon automatically generates a control panel logo image based on the application name. Useful if you need a quick way to see which site you're editing at a glance. You can also configure the text and styles, allowing you to use different values in different environments for example.

> **Important:** This addon uses Statamic's white labeling feature, which is Pro only. Therefore this addon will only work with the Pro edition.

## Installation

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

```bash
composer require jacksleight/statamic-lazy-logo
```

Set the `custom_logo_url` in `config/statamic/cp.php` to `/cp/lazy-logo.svg`:

```php
'custom_logo_url' => env('STATAMIC_CUSTOM_LOGO_URL', '/cp/lazy-logo.svg'),
```

That's it!

## Configuration

By default the text will be the `APP_NAME` environment variable, and it'll be styled to match the CP text. If you want to customise it you can publish and edit the config:

```bash
php please vendor:publish --tag=statamic-lazy-logo-config
```

Then open `config/statamic/lazy_logo.php` and make your changes.
