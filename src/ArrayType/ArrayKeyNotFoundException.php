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
 * Class ArrayKeyNotFoundException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @SuppressWarnings(PHPMD)
 */
final class ArrayKeyNotFoundException extends BaseException
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
