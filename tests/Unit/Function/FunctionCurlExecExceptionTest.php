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
use Ixnode\PhpException\Function\FunctionCurlExecException;
use PHPUnit\Framework\TestCase;

/**
 * Class FunctionCurlExecExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @link FunctionCurlExecException
 */
final class FunctionCurlExecExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $error = 'Error while executing the curl method.';
        $url = 'http://localhost';

        /* Act */
        try {
            throw new FunctionCurlExecException($error, $url);
        } catch (FunctionCurlExecException $exception) {
            $expectedNonVerbose = sprintf(FunctionCurlExecException::TEXT_PLACEHOLDER, $error, $url);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
