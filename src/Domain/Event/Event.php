<?php

declare(strict_types = 1);

namespace App\Domain\Event;

abstract class Event implements EventInterface
{
    protected $appearedAt;

    public function __construct()
    {
        $this->appearedAt = new \DateTime();
    }

    public function name(): string
    {
        return rtrim((new \ReflectionClass($this))->getShortName(), 'Event');
    }

    public function appearedAt(): \DateTime
    {
        return $this->appearedAt;
    }
}
