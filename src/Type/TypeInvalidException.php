<?php

/*
 * This file is part of the ixnode/php-exception project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ixnode\PhpException\Type;

use Ixnode\PhpException\Type\Base\BaseTypeException;
use JetBrains\PhpStorm\ExpectedValues;

/**
 * Class TypeInvalidException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class TypeInvalidException extends BaseTypeException
{
    public const TEXT_PLACEHOLDER = 'Invalid type "%s". "%s" expected.';

    public const TEXT_PLACEHOLDER_WITHOUT_TYPE = 'Invalid type. "%s" expected.';

    public const TYPE_BOOL = 'bool';

    public const TYPE_BOOLEAN = 'boolean';

    public const TYPE_INT = 'int';

    public const TYPE_INTEGER = 'integer';

    public const TYPE_FLOAT = 'float';

    public const TYPE_DOUBLE = 'double';

    public const TYPE_STRING = 'string';

    public const TYPE_ARRAY = 'array';

    public const TYPE_OBJECT = 'object';

    public const TYPE_ITERABLE = 'iterable';

    public const TYPE_JSON = 'json';

    public const TYPE_STD_CLASS = 'stdClass';

    public const TYPE_NULL = 'null';

    /**
     * InvalidTypeException constructor.
     *
     * @param string $expected
     * @param string|null $given
     */
    public function __construct(
        #[ExpectedValues(["bool", "boolean", "int", "integer", "float", "double", "string", "array", "array-associative", "array-sequential", "object", "null", "iterable", "json-string", "stdClass", "flat"])] string $expected,
        #[ExpectedValues(["bool", "boolean", "int", "integer", "float", "double", "string", "array", "array-associative", "array-sequential", "object", "null", "iterable", "json-string", "stdClass", "flat", null])] ?string $given = null)
    {
        $messageNonVerbose = $given === null ?
            sprintf(self::TEXT_PLACEHOLDER_WITHOUT_TYPE, $expected) :
            sprintf(self::TEXT_PLACEHOLDER, $given, $expected);

        parent::__construct($messageNonVerbose);
    }
}
