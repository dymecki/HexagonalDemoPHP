<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Infrastructure\Persistence\InMemory;

use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Domain\Model\User\UserId;
use Dymecki\HexagonalDemo\Domain\Model\User\UserRepositoryInterface;

final class UserInMemoryRepository implements UserRepositoryInterface
{
    private $repository = [];

    public function save(User $user)
    {
        $this->repository[(string) $user->id()] = $user;
    }

    public function findById(UserId $userId): User
    {
        if (isset($this->repository[(string) $userId])) {
            return $this->repository[(string) $userId];
        }

        throw new \Exception('No user in the repository for UserId: ' . $userId);
    }

    public function remove(User $user): void
    {
        unset($this->repository[(string) $user->id()]);
    }
}
