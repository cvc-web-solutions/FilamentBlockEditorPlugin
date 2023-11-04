# This is my package filamentblockeditorplugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cvc-web-solutions/filamentblockeditorplugin.svg?style=flat-square)](https://packagist.org/packages/cvc-web-solutions/filamentblockeditorplugin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cvc-web-solutions/filamentblockeditorplugin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cvc-web-solutions/filamentblockeditorplugin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cvc-web-solutions/filamentblockeditorplugin/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cvc-web-solutions/filamentblockeditorplugin/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cvc-web-solutions/filamentblockeditorplugin.svg?style=flat-square)](https://packagist.org/packages/cvc-web-solutions/filamentblockeditorplugin)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require cvc-web-solutions/filamentblockeditorplugin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filamentblockeditorplugin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filamentblockeditorplugin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filamentblockeditorplugin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentBlockEditorPlugin = new CvcWebSolutions\FilamentBlockEditorPlugin();
echo $filamentBlockEditorPlugin->echoPhrase('Hello, CvcWebSolutions!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [CVC Web Solutions](https://github.com/CVC-TACRM)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
