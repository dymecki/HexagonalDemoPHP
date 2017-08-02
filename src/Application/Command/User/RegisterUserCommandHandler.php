<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command\User;

use Dymecki\HexagonalDemo\Application\Command\CommandInterface;
use Dymecki\HexagonalDemo\Application\Command\CommandHandlerInterface;
use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\InMemory\UserInMemoryRepository;

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