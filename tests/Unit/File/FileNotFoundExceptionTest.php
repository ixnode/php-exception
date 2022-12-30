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

namespace Ixnode\PhpException\Tests\Unit\File;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\File\FileNotFoundException;
use PHPUnit\Framework\TestCase;

/**
 * Class FileNotFoundExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-30)
 * @since 0.1.0 (2022-12-30) First version.
 * @link FileNotFoundException
 */
final class FileNotFoundExceptionTest extends TestCase
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
            throw new FileNotFoundException($path);
        } catch (FileNotFoundException $exception) {
            $expectedNonVerbose = sprintf(FileNotFoundException::TEXT_PLACEHOLDER, $path);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
