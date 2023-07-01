<?php

/*
 * This file is part of the ixno/php-exception project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ixnode\PhpException\Case;

use Ixnode\PhpException\Case\Base\BaseCaseException;
use Ixnode\PhpException\Tests\Unit\Case\CaseUnsupportedExceptionTest;

/**
 * Class CaseUnsupportedException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2022-07-01) First version.
 * @link CaseUnsupportedExceptionTest
 */
final class CaseUnsupportedException extends BaseCaseException
{
    public const TEXT_PLACEHOLDER = 'Unsupported case ("%s").';

    /**
     * @param string $case
     */
    public function __construct(string $case)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $case);

        parent::__construct($messageNonVerbose);
    }
}
