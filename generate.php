<?php

declare(strict_types=1);

require_once('./vendor/autoload.php');

use GoodFirstIssue\Generator;
use GoodFirstIssue\GitHubAPIClient;
use GuzzleHttp\Client;

$clients_config = [
    'base_uri' => 'https://api.github.com/',
];

// Get GITHUB_TOKEN from env-variable
$gh_token = getenv('GITHUB_TOKEN');
if (is_string($gh_token)) {
    $clients_config['headers'] = ['Authorization' => 'Bearer ' . $gh_token];
    print_r('Success: ENV-variable GITHUB_TOKEN was set.' . PHP_EOL );
} else {
    print_r('Warning: ENV-variable GITHUB_TOKEN not found.' . PHP_EOL);
}

// Init Guzzle client with headers
$client = new Client($clients_config);

$github_api_client = new GitHubAPIClient($client);

$generator = new Generator(__DIR__, $github_api_client);
$generator->run();
