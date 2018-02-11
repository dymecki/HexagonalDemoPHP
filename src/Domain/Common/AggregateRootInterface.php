<?php

declare(strict_types = 1);

namespace App\Domain\Common;

use App\Domain\Event\EventInterface;

interface AggregateRootInterface extends EntityInterface
{
    public function recordEvent(EventInterface $event): void;

    public function releaseEvents(): array;

    public function clearEvents(): void;
}
