<?php

    echo 'HexagonalDemo 1.0';

    $loader = require '../vendor/autoload.php';
    //$loader->add('/Offer', __DIR__ . '/../src');

    use Monolog\ErrorHandler;
    use Monolog\Formatter\LineFormatter;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;

    $logger  = new Logger('Ads');
    $handler = new StreamHandler(__DIR__ . '/../log/php_errors.log', Logger::DEBUG);

    // Register the logger to handle PHP errors and exceptions
    ErrorHandler::register($logger);

    $lineFormatter = new LineFormatter;
    $lineFormatter->includeStacktraces();
    $handler->setFormatter($lineFormatter);

    // Add log file handler
    $logger->pushHandler($handler);
