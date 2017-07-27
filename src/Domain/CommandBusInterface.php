<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface CommandBusInterface
{
    function execute(CommandInterface $command);
}
