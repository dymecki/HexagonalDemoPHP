<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Common;

interface AggregateRootInterface extends EntityInterface
{
    public function record(EventInterface $event);

    public function release();
}
