<?php

declare(strict_types = 1);

namespace App\Domain\Event;

interface EventSubscriberInterface
{
    public function handle($event);
    public function isSubscribedTo($event): bool;
}