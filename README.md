<!-- statamic:hide -->

![Statamic](https://flat.badgen.net/badge/Statamic/3.1+/FF269E)
![Packagist version](https://flat.badgen.net/packagist/v/jacksleight/statamic-lazy-logo)
![License](https://flat.badgen.net/github/license/jacksleight/statamic-lazy-logo)

# Lazy Logo 

<!-- /statamic:hide -->

This Statamic addon automatically generates a control panel logo image based on the application name. It supports custom text and styles, different styles for the outside (login etc.) and inside pages, and can also set a background color or gradient on the outside pages.

> **Important:** This addon uses Statamic's white labeling feature, which is Pro only. Therefore this addon will only work with the Pro edition.

## Installation

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

```bash
composer require jacksleight/statamic-lazy-logo
```

Then set the `statamic.cp.custom_logo_url` config option to the Lazy Logo SVGs:

```php
'custom_logo_url' => [
    'nav' => '/cp/lazy-logo.svg',
    'outside' => '/cp/lazy-logo-outside.svg',
],
```

## Configuration

You can customise the styles by publishing the config:

```bash
php please vendor:publish --tag=statamic-lazy-logo-config
```

And then opening `config/statamic/lazy_logo.php` to make your changes.

### Outside Page Background

You can set the background color of the outside pages by setting the `statamic.cp.custom_css_url` config option to the Lazy Logo CSS:

```php
'custom_css_url' => '/cp/lazy-logo.css',
```

And then changing the `statamic.cp.theme` config option to `lazy-logo`:

```php
'theme' => env('STATAMIC_THEME', 'lazy-logo'),
```
