# :uc:package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

> **// TODO: customize this description and delete this line**

This package provides a new theme for projects that use the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. 


## Screenshots

> **// TODO: add a screenshot and delete these lines;** 
> to add a screenshot to a github markdown file, the easiest way is to
> open an issue, upload the screenshot there with drag&drop, then close the issue;
> you now have that image hosted on Github's servers; so you can then right-click 
> the image to copy its URL, and use that URL wherever you want (for example... here)

![Backpack Toggle Field Addon](https://via.placeholder.com/600x250?text=screenshot+needed)


## Installation

Via Composer

``` bash
composer require :kc:vendor/:kc:package
```

## Usage

> **// TODO: explain to your users how to use the functionality** this package provides; 
> we've provided an example for a Backpack addon that provides a custom field

To use the theme this package provides, use its namespace inside your `config/backpack/ui.php`, and the theme this was created from as a fallback:

```php
    'view_namespace' => ':kc:vendor.:kc:package::',
    'view_namespace_fallback' => 'backpack.theme-coreuiv4::',
```

## Overriding

If you want to override any of the blade files this theme provides, feel free to create a file with the same name in your `resources/views/vendor/:kc:vendor/:kc:package/` - then Backpack will pick up your file instead of the one in the package.

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/:kc:vendor/:kc:package/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

This project was released under :license, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information. 

[ico-version]: https://img.shields.io/packagist/v/:kc:vendor/:kc:package.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:kc:vendor/:kc:package.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:kc:vendor/:kc:package
[link-downloads]: https://packagist.org/packages/:kc:vendor/:kc:package
[link-author]: https://github.com/:kc:vendor
[link-contributors]: ../../contributors
