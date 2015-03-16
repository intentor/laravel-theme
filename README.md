# Laravel Theme

**Simple theme manager for Laravel 5**

## Contents

1. <a href="#introduction">Introduction</a>
2. <a href="#installation">Installation</a>
3. <a href="#quick-start">Quick start</a>
4. <a href="#changelog">Changelog</a>
5. <a href="#support">Support</a>
6. <a href="#license">License</a>

## <a id="introduction"></a>Introduction

*Laravel Form* provides a series of helpers for form creation in PHP pages and Blade templates.

Compatible with Laravel 5.

## <a id="installation"></a>Installation

At `composer.json` of your Laravel installation, add the following require line:

``` json
{
    "require": {
        "intentor/laravel-theme": "~1.0"
    }
}
```

Run `composer update` to add the package to your Laravel app.

At `config/app.php`, add the Service Provider and the Facade:

```php
    'providers' => [
		'Intentor\LaravelTheme\ServiceProvider',
    ]

	//...

    'aliases' => [
        ''Form' => 'Intentor\LaravelTheme\Facade'
    ]
```

## <a id="quick-start"></a>Quick start

?

## <a id="changelog"></a>Changelog

Please see [CHANGELOG.md](CHANGELOG.md).

## <a id="support"></a>Support

Found a bug? Please create an issue on the [GitHub project page](https://github.com/intentor/laravel-theme/issues) or send a pull request if you have a fix or extension.

You can also send me a message at support@intentor.com.br to discuss more obscure matters about the component.

## <a id="license"></a>License

Licensed under the [The MIT License (MIT)](http://opensource.org/licenses/MIT). Please see [LICENSE](LICENSE) for more information.