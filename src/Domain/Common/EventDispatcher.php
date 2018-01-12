<?php

declare(strict_types = 1);

namespace App\Domain\Common;

final class EventDispatcher
{
    private $listeners = [];

    public function bind(string $eventName, EventListenerInterface $listener): void
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function registered(string $eventName): array
    {
        return isset($this->listeners[$eventName]) ? $this->listeners[$eventName] : [];
    }
}
