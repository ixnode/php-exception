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

namespace Ixnode\PhpException\ArrayType;

use Ixnode\PhpException\ArrayType\Base\BaseArrayException;

/**
 * Class ArrayCountException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.1 (2023-01-28)
 * @since 0.1.1 (2023-01-28) Fix psr-4 autoloading standard.
 * @since 0.1.0 (2023-01-10) First version.
 */
final class ArrayCountException extends BaseArrayException
{
    public const TEXT_PLACEHOLDER = 'The number of two arrays are not equal.';

    /**
     * ArrayCountException constructor.
     */
    public function __construct()
    {
        $messageNonVerbose = self::TEXT_PLACEHOLDER;

        parent::__construct($messageNonVerbose);
    }
}
