<?php

declare(strict_types = 1);

namespace App\Domain\Common;

use App\Domain\Event\EventInterface;

interface AggregateRootInterface extends EntityInterface
{
    public function recordEvent(EventInterface $event);

    public function releaseEvents();

    public function clearEvents();
}
