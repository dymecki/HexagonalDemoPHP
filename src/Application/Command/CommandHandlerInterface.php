<?php

declare(strict_types = 1);

namespace App\Application\Command;

use App\Application\Command;

interface CommandHandlerInterface
{
    function handle(Command\CommandInterface $command);
}
