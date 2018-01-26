<?php

declare(strict_types = 1);

namespace App\Domain\Model\User;

interface UserRepositoryInterface
{
    public function add(User $user);

    public function findById(UserId $userId): User;

    public function remove(User $user);
}