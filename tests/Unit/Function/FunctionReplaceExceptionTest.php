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

namespace Ixnode\PhpException\Tests\Unit\Function;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Function\FunctionReplaceException;
use PHPUnit\Framework\TestCase;

/**
 * Class FunctionReplaceExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-31)
 * @since 0.1.0 (2022-12-31) First version.
 * @link FunctionReplaceException
 */
final class FunctionReplaceExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $replace = 'Replace of string "abc"';

        /* Act */
        try {
            throw new FunctionReplaceException($replace);
        } catch (FunctionReplaceException $exception) {
            $expectedNonVerbose = sprintf(FunctionReplaceException::TEXT_PLACEHOLDER, $replace);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
