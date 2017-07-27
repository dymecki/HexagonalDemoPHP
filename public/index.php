<?php

include_once 'InitLogger.php';

echo 'HexagonalDemo 1.0';

use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\Repository\InMemory\UserInMemoryRepository;

$user = User::register(
    'Michał',
    'michal@dymecki.com'
);

var_dump((string) $user);

$userRepository = new UserInMemoryRepository;

var_dump($userRepository->findById($user->id()));