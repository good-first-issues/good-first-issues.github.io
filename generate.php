<?php

declare(strict_types=1);

require_once('./vendor/autoload.php');

use GoodFirstIssue\Generator;

$generator = new Generator(__DIR__);
$generator->run();
