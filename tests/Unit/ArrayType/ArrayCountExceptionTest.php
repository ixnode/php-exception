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

namespace Ixnode\PhpException\Tests\Unit\ArrayType;

use Ixnode\PhpException\ArrayType\ArrayCountException;
use Ixnode\PhpException\Base\BaseException;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayCountExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-01-10)
 * @since 0.1.0 (2023-01-10) First version.
 * @link ArrayCountException
 */
final class ArrayCountExceptionTest extends TestCase
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
            throw new ArrayCountException();
        } catch (ArrayCountException $exception) {
            $expectedNonVerbose = ArrayCountException::TEXT_PLACEHOLDER;
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
