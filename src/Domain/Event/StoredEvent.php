<?php

declare(strict_types = 1);

namespace App\Domain\Event;

final class StoredEvent implements EventInterface
{
    private $eventId;
    private $content;
    private $appearedAt;
    private $name;

    public function __construct($name, \DateTime $appearedAt, $content)
    {
        $this->name       = $name;
        $this->appearedAt = $appearedAt;
        $this->content    = $content;
    }

    public function appearedAt(): \DateTime
    {
        return $this->appearedAt;
    }

    public function eventId()
    {
        return $this->eventId;
    }

    public function content()
    {
        return $this->content;
    }

    public function name()
    {
        return $this->name;
    }
}