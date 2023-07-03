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
 * Class FunctionCurlExecException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class FunctionCurlExecException extends BaseFunctionException
{
    public const TEXT_PLACEHOLDER = 'Curl exec exception: "%s" (%s).';

    /**
     * FunctionCurlExecException constructor.
     *
     * @param string $error
     * @param string $url
     */
    public function __construct(string $error, string $url)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $error, $url);

        parent::__construct($messageNonVerbose);
    }
}
