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

namespace Ixnode\PhpException\Tests\Unit\Function;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Function\FunctionFOpenException;
use PHPUnit\Framework\TestCase;

/**
 * Class FunctionFOpenExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-06-24)
 * @since 0.1.0 (2023-06-24) First version.
 * @link FunctionFOpenException
 */
final class FunctionFOpenExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */

        /* Act */
        try {
            throw new FunctionFOpenException();
        } catch (FunctionFOpenException $exception) {
            $expectedNonVerbose = FunctionFOpenException::TEXT_PLACEHOLDER;
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
