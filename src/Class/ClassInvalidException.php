<?php

declare(strict_types=1);

/*
 * This file is part of the ixno/php-exception project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Ixnode\PhpException\Class;

use Ixnode\PhpException\Class\Base\BaseClassException;

/**
 * Class ClassInvalidException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class ClassInvalidException extends BaseClassException
{
    public const TEXT_PLACEHOLDER = 'Invalid class "%s" given ("%s" expected).';

    /**
     * ClassNotFoundException constructor.
     *
     * @param class-string $class
     * @param class-string|array<int, class-string> $expected
     */
    public function __construct(string $class, string|array $expected)
    {
        $messageNonVerbose = match (true) {
            is_string($expected) => sprintf(self::TEXT_PLACEHOLDER, $class, $expected),
            default => sprintf(self::TEXT_PLACEHOLDER, $class, implode('", "', $expected)),
        };

        parent::__construct($messageNonVerbose);
    }
}
