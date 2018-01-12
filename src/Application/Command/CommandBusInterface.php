<?php

declare(strict_types = 1);

namespace App\Application\Command;

use App\Application\Command;

interface CommandBusInterface
{
    public function execute(Command\CommandInterface $command);

    public function handlerObject(Command\CommandInterface $command);
}
