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

namespace Ixnode\PhpException\Tests\Unit\File;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\File\FileNotWriteableException;
use PHPUnit\Framework\TestCase;

/**
 * Class FileNotWritableExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @link FileNotWriteableException
 */
final class FileNotWritableExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $path = '/file.txt';

        /* Act */
        try {
            throw new FileNotWriteableException($path);
        } catch (FileNotWriteableException $exception) {
            $expectedNonVerbose = sprintf(FileNotWriteableException::TEXT_PLACEHOLDER, $path);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
