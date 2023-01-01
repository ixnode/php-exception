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

namespace Ixnode\PhpException\Configuration;

use Ixnode\PhpException\Configuration\Base\BaseConfigurationException;

/**
 * Class ConfigurationMissingException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-01-01)
 * @since 0.1.0 (2023-01-01) First version.
 */
final class ConfigurationMissingException extends BaseConfigurationException
{
    public const TEXT_PLACEHOLDER = 'Configuration or action missing (%s).';

    /**
     * ConfigurationMissingException constructor.
     *
     * @param string $hint
     */
    public function __construct(string $hint)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $hint);

        parent::__construct($messageNonVerbose);
    }
}
