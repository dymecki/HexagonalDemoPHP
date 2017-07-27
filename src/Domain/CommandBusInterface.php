<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface CommandBusInterface
{
    public function execute(CommandInterface $command);

    public function handlerObject(CommandInterface $command);
}
