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

namespace Ixnode\PhpException\Case;

use Ixnode\PhpException\Case\Base\BaseCaseException;

/**
 * Class CaseInvalidException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class CaseInvalidException extends BaseCaseException
{
    public const TEXT_PLACEHOLDER = 'Invalid case "%s". "%s" expected.';

    /**
     * OptionInvalidException constructor.
     *
     * @param string $given
     * @param string[] $expected
     */
    public function __construct(string $given, array $expected)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $given, implode(', ', $expected));

        parent::__construct($messageNonVerbose);
    }
}
