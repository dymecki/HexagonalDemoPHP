<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\CommandInterface;
use Dymecki\HexagonalDemo\Domain\CommandHandlerInterface;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\Repository\InMemory\UserInMemoryRepository;

final class RegisterUserCommandHandler implements CommandHandlerInterface
{
    public function handle(CommandInterface $command)
    {
        $user = User::register(
            $command->name(),
            $command->email()
        );

        (new UserInMemoryRepository)->save($user);

        return $user;
    }
}