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

namespace Ixnode\PhpException\Tests\Unit\Configuration;

use Ixnode\PhpException\Base\BaseException;
use Ixnode\PhpException\Configuration\ConfigurationMissingException;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationMissingExceptionTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-01-01)
 * @since 0.1.0 (2023-01-01) First version.
 * @link ConfigurationMissingException
 */
final class ConfigurationMissingExceptionTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @test
     */
    public function test(): void
    {
        /* Arrange */
        $hint = '$a not set, use $this->>setA();';

        /* Act */
        try {
            throw new ConfigurationMissingException($hint);
        } catch (ConfigurationMissingException $exception) {
            $expectedNonVerbose = sprintf(ConfigurationMissingException::TEXT_PLACEHOLDER, $hint);
            $expectedVerbose = sprintf(BaseException::TEMPLATE_VERBOSE, $expectedNonVerbose, $exception->getFile(), $exception->getLine());
        }

        /* Assert */
        $this->assertSame($expectedNonVerbose, $exception->getMessageNonVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessageVerbose());
        $this->assertSame($expectedVerbose, $exception->getMessage());
    }
}
