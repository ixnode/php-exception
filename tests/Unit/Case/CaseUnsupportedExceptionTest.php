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
use Ixnode\PhpException\Case\CaseUnsupportedException;
use PHPUnit\Framework\TestCase;

/**
 * Class CaseUnsupportedExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2022-07-01) First version.
 * @link CaseUnsupportedException
 */
final class CaseUnsupportedExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $case = 'Variable $this->test is not initialized.';

        /* Act */
        try {
            throw new CaseUnsupportedException($case);
        } catch (CaseUnsupportedException $exception) {
            $expectedNonVerbose = sprintf(CaseUnsupportedException::TEXT_PLACEHOLDER, $case);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
