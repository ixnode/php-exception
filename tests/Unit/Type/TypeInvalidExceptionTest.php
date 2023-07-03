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

namespace Ixnode\PhpException\Tests\Unit\Type;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Type\TypeInvalidException;
use PHPUnit\Framework\TestCase;

/**
 * Class TypeInvalidExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @link TypeInvalidException
 */
final class TypeInvalidExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function testWithTypeGiven(): void
    {
        /* Arrange */
        $expected = TypeInvalidException::TYPE_BOOL;
        $given = TypeInvalidException::TYPE_ARRAY;

        /* Act */
        try {
            throw new TypeInvalidException($expected, $given);
        } catch (TypeInvalidException $exception) {
            $expectedNonVerbose = sprintf(TypeInvalidException::TEXT_PLACEHOLDER, $given, $expected);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }

    /**
     * Test wrapper.
     *
     * @test
     */
    public function testWithoutTypeGiven(): void
    {
        /* Arrange */
        $expected = TypeInvalidException::TYPE_BOOL;

        /* Act */
        try {
            throw new TypeInvalidException($expected);
        } catch (TypeInvalidException $exception) {
            $expectedNonVerbose = sprintf(TypeInvalidException::TEXT_PLACEHOLDER_WITHOUT_TYPE, $expected);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
