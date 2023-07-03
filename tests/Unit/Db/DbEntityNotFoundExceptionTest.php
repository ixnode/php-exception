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

namespace Ixnode\PhpException\Tests\Unit\Db;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Db\DbEntityNotFoundException;
use PHPUnit\Framework\TestCase;

/**
 * Class DbEntityNotFoundExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-31)
 * @since 0.1.0 (2022-12-31) First version.
 * @link DbEntityNotFoundException
 */
final class DbEntityNotFoundExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $class = DbEntityNotFoundException::class;

        /* Act */
        try {
            throw new DbEntityNotFoundException($class);
        } catch (DbEntityNotFoundException $exception) {
            $expectedNonVerbose = sprintf(DbEntityNotFoundException::TEXT_PLACEHOLDER, $class);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
