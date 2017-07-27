<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface CommandHandlerInterface
{
    function handle(CommandInterface $command);
}
