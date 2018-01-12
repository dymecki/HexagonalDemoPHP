<?php

declare(strict_types = 1);

namespace App\Application\Command\User;

use App\Application\Command\CommandInterface;
use App\Application\Command\CommandHandlerInterface;
use App\Domain\Model\Car\Car;
use App\Infrastructure\Persistence\InMemory\CarInMemoryRepository;

final class RegisterCarCommandHandler implements CommandHandlerInterface
{
    public function handle(CommandInterface $command)
    {
        $user = Car::register(
            $command->brand(),
            $command->model(),
            $command->fuelAmount(),
            $command->fuelUnit()
        );

        (new CarInMemoryRepository)->save($user);

        return $user;
    }
}