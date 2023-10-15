<?php

declare(strict_types = 1);

use GoodFirstIssue\Generator;
use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
final class GeneratorTest extends TestCase
{
    public function test_instance_of_generator(): void
    {
        $generator = new Generator();

        $this->assertInstanceOf(Generator::class, $generator);
    }
}
