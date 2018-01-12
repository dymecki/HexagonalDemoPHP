<?php

use Monolog\ErrorHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$loader = require '../../../../vendor/autoload.php';
$loader->add('/Domain/Model/User/User', __DIR__ . '/../src');

$logger  = new Logger('HexagonalDemo');
$handler = new StreamHandler(__DIR__ . '/../log/php_errors.log', Logger::DEBUG);

// Register the logger to handle PHP errors and exceptions
ErrorHandler::register($logger);

$lineFormatter = new LineFormatter(
    "[%datetime%] [%level_name%] =================\n%message%\n\n%context%\n%extra%\n\n",
    'd.m.Y H:i:s'
);
$lineFormatter->includeStacktraces();
$handler->setFormatter($lineFormatter);

// Add log file handler
$logger->pushHandler($handler);