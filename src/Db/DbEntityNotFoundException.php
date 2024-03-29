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

namespace Ixnode\PhpException\Db;

use Ixnode\PhpException\Db\Base\BaseDbException;

/**
 * Class DbEntityNotFoundException
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-31)
 * @since 0.1.0 (2022-12-31) First version.
 */
final class DbEntityNotFoundException extends BaseDbException
{
    public const TEXT_PLACEHOLDER = 'DB Entity "%s" not found.';

    /**
     * DbEntityNotFoundException constructor.
     *
     * @param class-string $class
     */
    public function __construct(string $class)
    {
        $messageNonVerbose = sprintf(self::TEXT_PLACEHOLDER, $class);

        parent::__construct($messageNonVerbose);
    }
}
