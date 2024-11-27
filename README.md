<!-- statamic:hide -->

# Lazy Logo 

<!-- /statamic:hide -->

> ⚠️ **Abandoned:** Statamic now has [built-in support](https://github.com/statamic/cms/pull/10350) for this feature.

This Statamic addon automatically generates a control panel logo image based on the application name. It supports custom text and styles, different logo styles for outside (login etc.) and inside pages, and setting an outside page background.

> **Note**
> This addon uses Statamic's white labeling feature, which is Pro only. Therefore this addon will only work with the Pro edition.

## Installation

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

```bash
composer require jacksleight/statamic-lazy-logo
```

Then set the `statamic.cp.custom_logo_url` config option to the Lazy Logo paths:

```php
'custom_logo_url' => [
    'nav' => '/cp/lazy-logo/nav.svg',
    'outside' => '/cp/lazy-logo/outside.svg',
],
```

## Configuration

You can customise the styles by publishing the config:

```bash
php please vendor:publish --tag=statamic-lazy-logo-config
```

And then opening `config/statamic/lazy_logo.php` to make your changes.

### Outside Page Background

You can enable the Lazy Logo background by setting the `statamic.cp.custom_css_url` config option to the Lazy Logo path:

```php
'custom_css_url' => '/cp/lazy-logo/cp.css',
```

And then changing the `statamic.cp.theme` config option to `lazy-logo`:

```php
'theme' => 'lazy-logo',
```
