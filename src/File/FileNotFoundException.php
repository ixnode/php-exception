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

namespace Ixnode\PhpException\File;

use Ixnode\PhpException\File\Base\BaseFileException;

/**
 * Class FileNotFoundException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 */
final class FileNotFoundException extends BaseFileException
{
    public const TEXT_PLACEHOLDER = 'File "%s" not found.';

    /**
     * FileNotFoundException constructor.
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $path);

        parent::__construct($messageNonVerbose);
    }
}
