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
 * Class FunctionJsonEncodeException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class FunctionJsonEncodeException extends BaseFunctionException
{
    public const TEXT_PLACEHOLDER = 'Unable to encode the given object into a JSON string.';

    /**
     * JsonEncodeException constructor.
     *
     */
    public function __construct()
    {
        $messageNonVerbose = self::TEXT_PLACEHOLDER;

        parent::__construct($messageNonVerbose);
    }
}
