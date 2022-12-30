# PHP Exception

[![Release](https://img.shields.io/github/v/release/ixnode/php-exception)](https://github.com/ixnode/php-exception/releases)
[![PHP](https://img.shields.io/badge/PHP-^8.0-777bb3.svg?logo=php&logoColor=white&labelColor=555555&style=flat)](https://www.php.net/supported-versions.php)
[![PHPStan](https://img.shields.io/badge/PHPStan-Level%20Max-brightgreen.svg?style=flat)](https://phpstan.org/user-guide/rule-levels)
[![PHPCS](https://img.shields.io/badge/PHPCS-PSR12-brightgreen.svg?style=flat)](https://www.php-fig.org/psr/psr-12/)
[![LICENSE](https://img.shields.io/github/license/ixnode/php-exception)](https://github.com/ixnode/php-exception/blob/master/LICENSE)

> This library offers some ready to use PHP Exceptions.

## Exception Classes

| Group   | Name                        | Usage                                                               |
|---------|-----------------------------|---------------------------------------------------------------------|
| `Array` | `ArrayKeyNotFoundException` | Used to indicate that a key in an array does not exist.             |
|         |                             |                                                                     |
| `File`  | `FileNotFoundException`     | Used to indicate that a given file was not found.                   |
| `File`  | `FileNotReadableException`  | Used to indicate that a given file is not readable.                 |
| `File`  | `FileNotWriteableException` | Used to indicate that a file cannot be written.                     |
|         |                             |                                                                     |
| `Type`  | `TypeInvalidException`      | Used to indicate that a given or gotten variable is the wrong type. |

## Installation

```bash
composer require ixnode/php-exception
```

```bash
vendor/bin/php-exception -V
```

```bash
php-exception 0.1.0 (12-30-2022 11:41:25) - Björn Hempel <bjoern@hempel.li>
```

## Usage

```php
use Ixnode\PhpException\FileNotFoundException;
```

```php
throw new FileNotFoundException('path-to-file');
```

## Development

```bash
git clone git@github.com:ixnode/php-exception.git && cd php-exception
```

```bash
composer install
```

```bash
composer test
```

## License

This tool is licensed under the MIT License - see the [LICENSE](/LICENSE) file for details