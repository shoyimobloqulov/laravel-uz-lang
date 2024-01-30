## Languages for Laravel

[![Total Downloads](https://poser.pugx.org/pektop/laravel-lang/d/total.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![Latest Stable Version](https://poser.pugx.org/pektop/laravel-lang/v/stable.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![Latest Unstable Version](https://poser.pugx.org/pektop/laravel-lang/v/unstable.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![License](https://poser.pugx.org/pektop/laravel-lang/license.svg)](https://packagist.org/packages/pektop/laravel-lang)

Language strings of [Laravel Framework](https://github.com/laravel/laravel/tree/master/resources/lang/en)

### Compatible with Laravel

* 10.10

### Available languages

* Uzbekistan

### Install

Require this package with composer using the following command:

```
composer require shoyim/laravel-lang dev-master
```

Add the service provider to the `providers` array in `config/app.php` (pass if you use Laravel 10.10)

```
LaravelLang\ServiceProvider::class
```

You can publish resources now

```
php artisan vendor:publish --provider="LaravelLang\ServiceProvider"
```

### License

Licensed under the [MIT license](http://opensource.org/licenses/MIT)
