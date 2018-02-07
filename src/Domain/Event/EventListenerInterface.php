<?php

declare(strict_types = 1);

namespace App\Domain\Event;

interface EventListenerInterface
{
    public function handle(EventInterface $event);
}