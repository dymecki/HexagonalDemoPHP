<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Common\EventInterface;
use App\Domain\Common\EventStoreInterface;
use App\Domain\Common\StoredEvent;

final class EventInMemoryRepository implements EventStoreInterface
{
    private $store = [];
    private $serializer;

    public function append(EventInterface $event)
    {
        $storedEvent = new StoredEvent(
            get_class($event),
            $event->appearedAt(),
            $this->serializer()
        );

        $this->store[] = $storedEvent;
    }

    private function serializer()
    {
        return $this->serializer;
    }
}