<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

interface UserRepositoryInterface
{
    public function save(User $user);

    public function findById(UserId $userId): User;

    public function remove(User $user);
}