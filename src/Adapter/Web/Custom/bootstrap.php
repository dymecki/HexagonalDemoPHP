<?php

declare(strict_types=1);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once '../../../../vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
//$config    = Setup::createAnnotationMetadataConfiguration([__DIR__], $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
$config = Setup::createYAMLMetadataConfiguration([__DIR__ . '/Config/Yaml'], $isDevMode);

// database configuration parameters
$conn = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'homestead',
    'password' => 'secret',
    'dbname'   => 'HexagonalDemo'
];

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);