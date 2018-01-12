<?php

include_once 'InitLogger.php';

use App\Domain\Model\User\User;
use App\Infrastructure\Persistence\InMemory\UserInMemoryRepository;
use App\Application\Command\SimpleCommandBus;
use App\Application\Command\User\RegisterUserCommand;

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