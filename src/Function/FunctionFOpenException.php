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

namespace Ixnode\PhpException\Function;

use Ixnode\PhpException\Function\Base\BaseFunctionException;

/**
 * Class FunctionFOpenException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-06-24)
 * @since 0.1.0 (2023-06-24) First version.
 */
final class FunctionFOpenException extends BaseFunctionException
{
    public const TEXT_PLACEHOLDER = 'Unexpected fopen result.';

    /**
     * FOpenException constructor.
     *
     */
    public function __construct()
    {
        $messageNonVerbose = self::TEXT_PLACEHOLDER;

        parent::__construct($messageNonVerbose);
    }
}
