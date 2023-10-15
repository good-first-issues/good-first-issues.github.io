<?php

declare(strict_types=1);

use Gomzyakov\CS\Finder;
use Gomzyakov\CS\Config;

// Routes for analysis with `php-cs-fixer`
$routes = ['./src', './tests'];

return Config::createWithFinder(Finder::createWithRoutes($routes));
