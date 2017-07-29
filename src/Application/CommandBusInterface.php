<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application;

use Dymecki\HexagonalDemo\Application\Command\CommandInterface;

interface CommandBusInterface
{
    public function execute(Command\CommandInterface $command);

    public function handlerObject(Command\CommandInterface $command);
}
