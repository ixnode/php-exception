# PHP Exception

[![Release](https://img.shields.io/github/v/release/ixnode/php-exception)](https://github.com/ixnode/php-exception/releases)
[![PHP](https://img.shields.io/badge/PHP-^8.0-777bb3.svg?logo=php&logoColor=white&labelColor=555555&style=flat)](https://www.php.net/supported-versions.php)
[![PHPStan](https://img.shields.io/badge/PHPStan-Level%20Max-brightgreen.svg?style=flat)](https://phpstan.org/user-guide/rule-levels)
[![PHPCS](https://img.shields.io/badge/PHPCS-PSR12-brightgreen.svg?style=flat)](https://www.php-fig.org/psr/psr-12/)
[![LICENSE](https://img.shields.io/github/license/ixnode/php-exception)](https://github.com/ixnode/php-exception/blob/master/LICENSE)

> This library offers some ready to use PHP Exceptions.

## Exception Classes

### Group `Array`

<table id="group-array">
    <caption><code>Array</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>ArrayKeyNotFoundException</code></td>
            <td align="left" valign="top">
                <nobr><code>string $key</code></nobr>
            </td>
            <td align="left" valign="top">Used to indicate that a key in an array does not exist.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>ArrayCountException</code></td>
            <td align="left" valign="top">
                <nobr><code>none</code></nobr>
            </td>
            <td align="left" valign="top">Used to indicate that two given arrays do not match in size.</td>
        </tr>
    </tbody>
</table>

### Group `Case`

<table id="group-case">
    <caption><code>Case</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>CaseInvalidException</code></td>
            <td align="left" valign="top">
                <nobr><code>string $given</code></nobr><br><nobr><code>array $expected</code></nobr>
            </td>
            <td align="left" valign="top">Used to indicate that a specified case is not supported (match, switch, etc.).</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>CaseUnsupportedException</code></td>
            <td align="left" valign="top">
                <nobr><code>string $case</code></nobr>
            </td>
            <td align="left" valign="top">Used to indicate that a specified case is not supported (logic
missing things, etc.).</td>
        </tr>
    </tbody>
</table>

### Group `Class`

<table id="group-class">
    <caption><code>Class</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>ClassInvalidException</code></td>
            <td align="left" valign="top"><nobr><code>string $class</code></nobr><br><nobr><code>string $expected</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a given or passed class is invalid.</td>
        </tr>
    </tbody>
</table>

### Group `Configuration`

<table id="group-configuration">
    <caption><code>Configuration</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>ConfigurationMissingException</code></td>
            <td align="left" valign="top"><nobr><code>string $hint</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a configuration or an action is missing.</td>
        </tr>
    </tbody>
</table>

### Group `Db`

<table id="group-db">
    <caption><code>Db</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>DbEntityNotFoundException</code></td>
            <td align="left" valign="top"><nobr><code>string $class</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a db entity was not found.</td>
        </tr>
    </tbody>
</table>

### Group `File`

<table id="group-file">
    <caption><code>File</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>FileNotFoundException</code></td>
            <td align="left" valign="top"><nobr><code>string $path</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a given file was not found.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>FileNotReadableException</code></td>
            <td align="left" valign="top"><nobr><code>string $path</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a given file is not readable.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>FileNotWriteableException</code></td>
            <td align="left" valign="top"><nobr><code>string $path</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a file cannot be written.</td>
        </tr>
    </tbody>
</table>

### Group `Function`

<table id="group-function">
    <caption><code>Function</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>FunctionCurlExecException</code></td>
            <td align="left" valign="top"><nobr><code>string $error</code></nobr><br><nobr><code>string $url</code></nobr></td>
            <td align="left" valign="top">Used to indicate that the curl_exec function is not working properly.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>FunctionFOpenException</code></td>
            <td align="left" valign="top"><nobr><code>none</code></nobr></td>
            <td align="left" valign="top">Used to indicate that the function fopen does not work properly.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>FunctionJsonEncodeException</code></td>
            <td align="left" valign="top"><nobr><code>none</code></nobr></td>
            <td align="left" valign="top">Used to indicate that an object cannot be converted into a JSON string.</td>
        </tr>
        <tr>
            <td align="left" valign="top"><code>FunctionReplaceException</code></td>
            <td align="left" valign="top"><nobr><code>string $replacePattern</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a value could not be replaced (str_replace, preg_replace, etc.).</td>
        </tr>
    </tbody>
</table>

### Group `Type`

<table id="group-type">
    <caption><code>Type</code></caption>
    <thead>
        <tr>
            <th><img width="200" height="0"><br>Name</th>
            <th><img width="150" height="0"><br>Parameter</th>
            <th><img width="1" height="0"><br>Usage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="left" valign="top"><code>TypeInvalidException</code></td>
            <td align="left" valign="top"><nobr><code>string $expected</code></nobr><br><nobr><code>?string $given = null</code></nobr></td>
            <td align="left" valign="top">Used to indicate that a given or passed variable is the wrong type.</td>
        </tr>
    </tbody>
</table>

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