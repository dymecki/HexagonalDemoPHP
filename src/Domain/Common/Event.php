<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Common;

abstract class Event implements EventInterface
{
    public function name(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
