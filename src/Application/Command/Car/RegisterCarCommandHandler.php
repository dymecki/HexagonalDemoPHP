<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command\User;

use Dymecki\HexagonalDemo\Domain\Common\CommandInterface;
use Dymecki\HexagonalDemo\Domain\Common\CommandHandlerInterface;
use Dymecki\HexagonalDemo\Domain\Model\Car\Car;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\Repository\InMemory\CarInMemoryRepository;

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