<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Common;

interface AggregateRootInterface extends EntityInterface
{
    public function recordEvent(EventInterface $event);

    public function releaseEvents();
}
