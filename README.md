# This is my package laravel-satusehat

[[DOCS POSTMAN]](https://www.postman.com/satusehat/workspace/satusehat-public/overview)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kangangga/laravel-satusehat.svg?style=flat-square)](https://packagist.org/packages/kangangga/laravel-satusehat)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kangangga/laravel-satusehat/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kangangga/laravel-satusehat/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kangangga/laravel-satusehat/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kangangga/laravel-satusehat/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kangangga/laravel-satusehat.svg?style=flat-square)](https://packagist.org/packages/kangangga/laravel-satusehat)

## Installation

You can install the package via composer:

```bash
composer require kangangga/laravel-satusehat
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-satusehat-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-satusehat-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-satusehat-views"
```

## Usage

```php
$satusehat = new Kangangga\Satusehat();

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Angga Saputra](https://github.com/kangangga)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
