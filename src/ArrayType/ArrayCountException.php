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

use Ixnode\PhpException\Base\BaseException;

/**
 * Class ArrayCountException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-01-10)
 * @since 0.1.0 (2023-01-10) First version.
 * @SuppressWarnings(PHPMD)
 */
final class ArrayCountException extends BaseException
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
