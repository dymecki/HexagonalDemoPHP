<?php

declare(strict_types = 1);

namespace App\Domain\Event;

interface EventStoreInterface
{
    public function append(EventInterface $event);
}

