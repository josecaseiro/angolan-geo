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

// Get all Provinces
$provincias = Provincia::all();

// Get a Province by name
$province = Provincia::where('name', 'Luanda')->first();

// Get all Municipios
$municipios = Municipio::all();

// Get Municipios by a Province
$luanda = Provincia::where('name', 'Luanda')->first();
$municipiosLuanda = $luanda->municipios;


// From a Municipio you can get its Province
$municipio = Municipio::first();
$prov = $municipio->provincia;
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

