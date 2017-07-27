<?php

include_once 'InitLogger.php';

use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\Repository\InMemory\UserInMemoryRepository;
use Dymecki\HexagonalDemo\Application\Service\SimpleCommandBus;
use Dymecki\HexagonalDemo\Application\Service\User\RegisterUserCommand;

$user = User::register(
    'Michał',
    'michal@dymecki.com'
);

//var_dump((string) $user);

$userRepository = new UserInMemoryRepository;
//var_dump($userRepository->findById($user->id()));

$registerUserCommand = new RegisterUserCommand('Jack', 'jack@alibaba.com');

$commandBus = new SimpleCommandBus;
var_dump(
    $commandBus->execute($registerUserCommand)
);