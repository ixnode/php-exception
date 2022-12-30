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

namespace Ixnode\PhpException\Tests\Unit\Case;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Case\CaseInvalidException;
use PHPUnit\Framework\TestCase;

/**
 * Class ClassInvalidExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @link CaseInvalidException
 */
final class CaseInvalidExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $case = 'unknown';
        $expected = ['known 1', 'known 2'];

        /* Act */
        try {
            throw new CaseInvalidException($case, $expected);
        } catch (CaseInvalidException $exception) {
            $expectedNonVerbose = sprintf(CaseInvalidException::TEXT_PLACEHOLDER, $case, implode(', ', $expected));
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
