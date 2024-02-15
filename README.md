
Certainly! Here's a package description with tags that you can use in your `README.md`:

```markdown
# Angolan Geo Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/josecaseiro/angolan-geo.svg?style=flat-square)](https://packagist.org/packages/josecaseiro/angolan-geo)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/josecaseiro/angolan-geo/Tests?label=tests)](https://github.com/josecaseiro/angolan-geo/actions)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/josecaseiro/angolan-geo/Check%20&%20fix%20styling?label=code%20style)](https://github.com/josecaseiro/angolan-geo/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/josecaseiro/angolan-geo.svg?style=flat-square)](https://packagist.org/packages/josecaseiro/angolan-geo)

AngolanGeo is a PHP Composer package that simplifies the process of creating and populating models for Provincia (Provinces) and Municipio (Municipalities) with accurate data of provinces and cities in Angola. This package is designed to seamlessly integrate with Laravel projects, providing an easy way to incorporate Angolan geographical information.

## Installation

You can install the package via composer:

```bash
composer require josecaseiro/angolan-geo
```

## Usage

```php
use Josecaseiro\AngolanGeo\Models\Provincia;
use Josecaseiro\AngolanGeo\Models\Municipio;

// Create Provincia instance
$luanda = new Provincia(['name' => 'Luanda']);
$luanda->save();

// Populate municipalities within Luanda
$municipio1 = new Municipio(['name' => 'Municipio 1', 'provincia_id' => $luanda->id]);
$municipio1->save();

$municipio2 = new Municipio(['name' => 'Municipio 2', 'provincia_id' => $luanda->id]);
$municipio2->save();
```

## Features

- **Easy Integration:** Seamlessly integrate Provincia and Municipio models into your Laravel projects.
- **Data Accuracy:** Utilize a reliable and regularly updated dataset of Angolan provinces and municipalities.
- **Efficient Model Population:** Simplify the process of populating your models with pre-existing data.
- **Localization Support:** The package aligns with Angola's administrative divisions, providing accurate localized data.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email jvcaseiro@hotmail.com instead of using the issue tracker.

## Credits

- [José Caseiro](https://github.com/josecaseiro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
```
