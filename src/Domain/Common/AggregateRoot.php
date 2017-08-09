<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Common;

abstract class AggregateRoot implements AggregateRootInterface
{
    private $id;

    public function id()
    {
        return $this->id;
    }

    public function record(EventInterface $event)
    {
        // TODO: Implement record() method.
    }

    public function release()
    {
        // TODO: Implement release() method.
    }
}
