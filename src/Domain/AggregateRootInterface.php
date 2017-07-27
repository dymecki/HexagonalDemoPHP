<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface AggregateRootInterface extends EntityInterface
{
    public function record($event);

    public function release();
}
