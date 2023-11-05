<?php

declare(strict_types=1);

require_once('./vendor/autoload.php');

use GoodFirstIssue\Generator;
use GoodFirstIssue\GitHubAPIClient;
use GuzzleHttp\Client;

// Get GITHUB_TOKEN from env-variable
$gh_token = getenv('GITHUB_TOKEN');
if (! is_string($gh_token)) {
    throw new LogicException('Cannot read GITHUB_TOKEN env-variable');
}

// Init Guzzle client with headers
$client = new Client([
    'base_uri' => 'https://api.github.com/',
    'headers' => ['Authorization' => 'Bearer ' . $gh_token]
]);

$github_api_client = new GitHubAPIClient($client);

$generator = new Generator(__DIR__, $github_api_client);
$generator->run();
