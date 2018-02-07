<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Event\EventInterface;
use App\Domain\Event\EventStoreInterface;
use App\Domain\Event\StoredEvent;
use JMS\Serializer\SerializerBuilder;

final class EventInMemoryRepository implements EventStoreInterface
{
    private $store = [];
    private $serializer;

    public function append(EventInterface $event)
    {
        $storedEvent = new StoredEvent(
            get_class($event),
            $event->appearedAt(),
            $this->serializer()->serialize($event, 'json')
        );

        $this->store[] = $storedEvent;
    }

    private function serializer()
    {
        if ($this->serializer == null) {
            $this->serializer = SerializerBuilder::create()->build();
        }

        return $this->serializer;
    }
}