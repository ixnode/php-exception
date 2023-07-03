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

namespace Ixnode\PhpException\Parser;

use Ixnode\PhpException\Parser\Base\BaseParserException;

/**
 * Class ParserException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-03)
 * @since 0.1.0 (2023-07-03) First version.
 */
final class ParserException extends BaseParserException
{
    public const TEXT_PLACEHOLDER = 'Unable to parse the given string "%s" (%s).';

    /**
     * @param string $parseString
     * @param string $context
     */
    public function __construct(string $parseString, string $context)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $parseString, $context);

        parent::__construct($messageNonVerbose);
    }
}
