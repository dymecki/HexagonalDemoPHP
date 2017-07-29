<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application;

use Dymecki\HexagonalDemo\Application\Command\CommandInterface;

final class SimpleCommandBus implements CommandBusInterface
{
    public function execute(CommandInterface $command)
    {
        return $this->handlerObject($command)->handle($command);
    }

    public function handlerObject(CommandInterface $command)
    {
        $handlerClassName = get_class($command) . 'Handler';
        return new $handlerClassName;
    }
}
