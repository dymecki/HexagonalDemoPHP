<?php

include_once 'InitLogger.php';

echo 'HexagonalDemo 1.0';

use Dymecki\HexagonalDemo\Domain\Model\User\User;

$user = User::register(
    \Ramsey\Uuid\Uuid::uuid4(),
    'Michał',
    'michal@dymecki.com'
);

var_dump((string) $user);