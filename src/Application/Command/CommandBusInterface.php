<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command;

use Dymecki\HexagonalDemo\Application\Command;

interface CommandBusInterface
{
    public function execute(Command\CommandInterface $command);

    public function handlerObject(Command\CommandInterface $command);
}
