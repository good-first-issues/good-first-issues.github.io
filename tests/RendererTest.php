<?php

declare(strict_types = 1);

namespace Tests;

use GoodFirstIssue\Renderer;
use PHPUnit\Framework\TestCase;

final class RendererTest extends TestCase
{
    public function test_instance_of_generator(): void
    {
        $generator = new Renderer(__DIR__);

        $this->assertInstanceOf(Renderer::class, $generator);
    }
}
