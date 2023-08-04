# Simple phpinfo widget for filament v3.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shibomb/filament-phpinfo-widget.svg?style=flat-square)](https://packagist.org/packages/shibomb/filament-phpinfo-widget)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shibomb/filament-phpinfo-widget/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shibomb/filament-phpinfo-widget/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/shibomb/filament-phpinfo-widget/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/shibomb/filament-phpinfo-widget/actions?query=workflow%3A"Fix+PHP+Code+Styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shibomb/filament-phpinfo-widget.svg?style=flat-square)](https://packagist.org/packages/shibomb/filament-phpinfo-widget)

## Installation

You can install the package via composer:

```bash
composer require shibomb/filament-phpinfo-widget
```

## Usage

Register the Widget in your Panel provider:

```php
public function panel(Panel $panel): Panel
{
    return $panel
        ->widgets([
            \Shibomb\FilamentPhpinfoWidget\FilamentPhpinfoWidget::class
        ]);
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [SHIBAHARA Hiroki](https://github.com/shibomb)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
