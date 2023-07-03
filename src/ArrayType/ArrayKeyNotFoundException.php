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

namespace Ixnode\PhpException\ArrayType;

use Ixnode\PhpException\ArrayType\Base\BaseArrayException;

/**
 * Class ArrayKeyNotFoundException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.1 (2023-01-28)
 * @since 0.1.1 (2023-01-28) Fix psr-4 autoloading standard.
 * @since 0.1.0 (2022-12-30) First version.
 */
final class ArrayKeyNotFoundException extends BaseArrayException
{
    public const TEXT_PLACEHOLDER = 'Required array key "%s" was not found.';

    /**
     * ArrayKeyNotFoundException constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $key);

        parent::__construct($messageNonVerbose);
    }
}
