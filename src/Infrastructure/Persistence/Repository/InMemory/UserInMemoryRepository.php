<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Domain\Model\User\UserId;
use Dymecki\HexagonalDemo\Domain\Model\User\UserRepositoryInterface;

final class UserInMemoryRepository implements UserRepositoryInterface
{
    public function save(User $user)
    {
        // TODO: Implement save() method.
    }

    public function findById(UserId $userId): User
    {
        // TODO: Implement findById() method.
    }

    public function remove(User $user)
    {
        // TODO: Implement remove() method.
    }
}
