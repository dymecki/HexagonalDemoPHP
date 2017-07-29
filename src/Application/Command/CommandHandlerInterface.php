<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command;

use Dymecki\HexagonalDemo\Application\Command;

interface CommandHandlerInterface
{
    function handle(Command\CommandInterface $command);
}
