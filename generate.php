<?php

declare(strict_types=1);

require_once('./vendor/autoload.php');

use GoodFirstIssue\Generator;
use GoodFirstIssue\GitHubAPIClient;

$generator = new Generator(__DIR__, new GitHubAPIClient);
$generator->run();
