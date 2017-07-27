<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Service;

use Dymecki\HexagonalDemo\Domain\CommandBusInterface;
use Dymecki\HexagonalDemo\Domain\CommandInterface;

final class SimpleCommandBus implements CommandBusInterface
{
    public function execute(CommandInterface $command)
    {
        // TODO: Implement execute() method.
    }
}
