<?php

declare(strict_types = 1);

namespace App\Application\Command\User;

use App\Application\Command\CommandHandlerInterface;
use App\Domain\Model\User\User;
use App\Infrastructure\Persistence\InMemory\UserInMemoryRepository;

final class RegisterUserCommandHandler implements CommandHandlerInterface
{
    public function handle(RegisterUserCommand $command)
    {
        $user = User::register(
            $command->name(),
            $command->email()
        );

        (new UserInMemoryRepository)->add($user);

        return $user;
    }
}