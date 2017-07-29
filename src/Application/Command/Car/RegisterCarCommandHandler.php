<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command\User;

use Dymecki\HexagonalDemo\Application\Command\CommandInterface;
use Dymecki\HexagonalDemo\Application\Command\CommandHandlerInterface;
use Dymecki\HexagonalDemo\Domain\Model\Car\Car;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\InMemory\CarInMemoryRepository;

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