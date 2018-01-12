<?php

declare(strict_types = 1);

namespace App\Domain\Common;

interface EventListenerInterface
{
    public function handle(EventInterface $event);
}