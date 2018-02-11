<?php

declare(strict_types = 1);

namespace App\Domain\Common;

use App\Domain\Event\EventInterface;

abstract class AggregateRoot implements AggregateRootInterface
{
    protected $id;
    private   $events = [];

    public function id()
    {
        return $this->id;
    }

    public function recordEvent(EventInterface $event): void
    {
        $this->events[] = $event;
    }

    public function releaseEvents(): array
    {
        return $this->events;
    }

    public function clearEvents(): void
    {
        $this->events = [];
    }

    public function applyEvents(): void
    {
        $methodName = '';

        foreach ($this->events as $event) {
            $methodName = 'apply' . get_class($event);
            $this->$methodName($event);
        }
    }
}
