<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Common;

final class Dispatcher
{
    private $listeners = [];

    public function bind(string $eventName, ListenerInterface $listener): void
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function registered(string $eventName): array
    {
        return isset($this->listeners[$eventName]) ? $this->listeners[$eventName] : [];
    }
}
