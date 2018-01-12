<?php

require_once "src/Infrastructure/Persistence/Doctrine/ORM/bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);