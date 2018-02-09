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

    public function recordEvent(EventInterface $event)
    {
        $this->events[] = $event;
    }

    public function releaseEvents()
    {
        return $this->events;
    }

    public function clearEvents()
    {
        $this->events = [];
    }

    public function applyEvents()
    {
        $methodName = '';

        foreach ($this->events as $event) {
            $methodName = 'apply' . get_class($event);
            $this->$methodName($event);
        }
    }
}
