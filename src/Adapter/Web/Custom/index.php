<?php

include_once 'InitLogger.php';

use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\InMemory\UserInMemoryRepository;
use Dymecki\HexagonalDemo\Application\Command\SimpleCommandBus;
use Dymecki\HexagonalDemo\Application\Command\User\RegisterUserCommand;

$user = User::register(
    'John',
    'john@foo.com'
);

$userRepository      = new UserInMemoryRepository;
$registerUserCommand = new RegisterUserCommand('Adam', 'adam@smith.com');
$commandBus          = new SimpleCommandBus;

var_dump(
    $commandBus->execute($registerUserCommand)
);