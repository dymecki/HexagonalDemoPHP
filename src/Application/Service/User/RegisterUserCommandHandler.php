<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Service\User;

use Dymecki\HexagonalDemo\Domain\Common\CommandInterface;
use Dymecki\HexagonalDemo\Domain\Common\CommandHandlerInterface;
use Dymecki\HexagonalDemo\Domain\Model\User\User;
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