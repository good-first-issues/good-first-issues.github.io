<?php

declare(strict_types = 1);

namespace Tests;

use GoodFirstIssue\GitHubAPIClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

final class GitHubAPIClientTest extends TestCase
{
    public function test_instance_of_generator(): void
    {
        $generator = new GitHubAPIClient(new Client());

        $this->assertInstanceOf(GitHubAPIClient::class, $generator);
    }
}
