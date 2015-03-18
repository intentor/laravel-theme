# ![Laravel Theme](https://cloud.githubusercontent.com/assets/5340818/6719072/0df533b0-cd97-11e4-9951-59796621efae.png)

**Simple theme manager for Laravel 5**

## Contents

1. <a href="#introduction">Introduction</a>
2. <a href="#installation">Installation</a>
3. <a href="#quick-start">Quick start</a>
4. <a href="#best-practices">Best practices</a>
5. <a href="#limitations">Limitations</a>
6. <a href="#changelog">Changelog</a>
7. <a href="#support">Support</a>
8. <a href="#license">License</a>

## <a id="introduction"></a>Introduction

*Laravel Theme* provides a simple way to manage themes on a Laravel app.

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

### Creating a theme

To create a theme, first add a `themes` folder to the `resources` folder of your app.

Inside the `themes` folder, any folder you create will represent a theme. For each theme folder, add a `views` folder, in which you'll create all the views for that particular theme.

The folder structure will look like this:

```
resources
└── themes
    ├── [theme folder]
    |   └── views
    |
    └── [another theme folder]
        └── views
```

### Setting a theme

To set a theme, call `Theme::set('theme_name')` anywhere you want to change your theme.

**Remember**: the name of theme is the name of the folder that represents the theme at the `resources/themes` folder.

### Displaying views

To display a view, just call `view('view_name')` without indicating any reference to the theme.

### Adding assets

To add assets to pages, just include them pointing to their location at the `public` folder.

## <a id="best-practices"></a>Best practices

1\. Add any assets (images, CSS, JS, etc.) for the theme in a specific folder inside the `public` folder.

2\. If you're using a task manager (like [Gulp](http://gulpjs.com/) or [Grunt](http://gruntjs.com/)) it's recommended to add assets at an `assets` folder inside the theme and then move the files to the public location. 

```
resources
└── themes
    ├── [theme folder]
    |   ├── css/sass/less
    |   ├── img
    |   ├── js
    |   └── views
    |
    └── [another theme folder]
        ├── css/sass/less
        ├── img
        ├── js
        └── views
```

3\. Create shared views at the `resources/views` folder.

## <a id="limitations"></a>Limitations

1. Currently it's not possible to have views inside the theme with the same name of shared views.
2. Asset management can be rather awkward, given the views for the theme are outside the `public` folder.

## <a id="changelog"></a>Changelog

Please see [CHANGELOG.md](CHANGELOG.md).

## <a id="support"></a>Support

Found a bug? Please create an issue on the [GitHub project page](https://github.com/intentor/laravel-theme/issues) or send a pull request if you have a fix or extension.

You can also send me a message at support@intentor.com.br to discuss more obscure matters about the component.

## <a id="license"></a>License

Licensed under the [The MIT License (MIT)](http://opensource.org/licenses/MIT). Please see [LICENSE](LICENSE) for more information.