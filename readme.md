# Theme Manager
A Laravel package for multiple theme handling.

With this package you can easily create customized themes for Laravel.


[![Total Downloads](https://poser.pugx.org/laravel-junkies/theme/downloads.svg)](https://packagist.org/packages/laravel-junkies/theme)
[![Latest Stable Version](https://poser.pugx.org/laravel-junkies/theme/v/stable.svg)](https://packagist.org/packages/laravel-junkies/theme)
[![Latest Unstable Version](https://poser.pugx.org/laravel-junkies/theme/v/unstable.svg)](https://packagist.org/packages/laravel-junkies/theme)
[![License](https://poser.pugx.org/laravel-junkies/theme/license.svg)](https://packagist.org/packages/laravel-junkies/theme)


## Installation

```
composer install laravel-junkies/theme
```

## Usage

The following code will looking for resources within the folder ``resources/themes/{themeName}`

```php
Theme::setup('themeName');
```