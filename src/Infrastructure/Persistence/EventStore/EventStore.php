<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\EventStore;

use App\Domain\Event\Event;

final class EventStore
{
    private $repository = [];

    public function add(Event $event)
    {
        $this->repository[] = $event;
    }
}
