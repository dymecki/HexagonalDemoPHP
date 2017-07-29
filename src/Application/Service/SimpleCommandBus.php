<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Service;

use Dymecki\HexagonalDemo\Domain\Common\CommandBusInterface;
use Dymecki\HexagonalDemo\Domain\Common\CommandInterface;

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
