<?php

declare(strict_types = 1);

namespace App\Domain\Common;

interface EventStoreInterface
{
    public function append(EventInterface $event);
}

