#!/usr/bin/env php
<?php

namespace Dymecki\HexagonalDemo\Application\Console;

require __DIR__.'/../../../vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application('HexagonalDemo', '1.0.0');
$app->add(new UserCommand);
$app->run();