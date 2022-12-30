# PHP Exception

This library offers some ready to use PHP Exceptions.

## Exception Classes

| Group               | Name                        | Usage                                               |
|---------------------|-----------------------------|-----------------------------------------------------|
| `BaseFileException` | `FileNotFoundException`     | Used to indicate that a given file was not found.   |
| `BaseFileException` | `FileNotReadableException`  | Used to indicate that a given file is not readable. |
| `BaseFileException` | `FileNotWriteableException` | Used to indicate that a file cannot be written.     |
|                     |                             |                                                     |

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