# Changelog

## 1.1.1 (2024-05-07)

- Statamic 5 support

## 1.1.0 (2023-05-02)

- [new] Statamic 4 support

## 1.0.0 (2022-12-12)

- [new] Supports different logo styles for outside (login etc.) and inside pages
- [new] Supports setting an outside page background
- [fix] Image and style browser caching
- [break] The `custom_logo_url` value has changed, see readme
- Deprecated routes have been removed

## 0.3.3 (2021-12-13)

- [fix] Logo route should not require authentication

## 0.3.2 (2021-11-22)

- [new] Add ability to shift the text baseline
- [fix] Improve default styles
- [fix] Correct the config filename

## 0.3.1 (2021-10-27)

- [fix] Center the logo on all auth screens, not just login

## 0.3.0 (2021-10-22)

- [break] **Package Renamed:**  
This package has been renamed to `jacksleight/statamic-lazy-logo`. Sorry for any inconvienence this causes, but it's necessary for some future plans and to keep everything namespaced properly. Update instructions:
    1. Update `composer.json` to `"jacksleight/statamic-lazy-logo": "0.3.0",`
    2. Move `config/lazy-logo.php` to `config/statamic/lazy-logo.php`
    3. Run `composer update`

## 0.2.1 (2021-09-21)

- [new] `font_weight` now defaults to `500`

## 0.2.0 (2021-09-21)

- [break] `gradient` config value is now merged with `color`, just specify an array instead of a single value

## 0.1.0 (2021-09-20)

- Initial release
