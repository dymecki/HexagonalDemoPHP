<?php

declare(strict_types = 1);

namespace App\Domain\Common;

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
}
