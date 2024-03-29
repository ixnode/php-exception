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
 * Class FunctionReplaceException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-31)
 * @since 0.1.0 (2022-12-31) First version.
 */
final class FunctionReplaceException extends BaseFunctionException
{
    public const TEXT_PLACEHOLDER = 'Unable to replace given pattern (%s).';

    /**
     * ReplaceException constructor.
     *
     * @param string $replacePattern
     */
    public function __construct(string $replacePattern)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $replacePattern);

        parent::__construct($messageNonVerbose);
    }
}
