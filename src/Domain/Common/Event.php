<?php

declare(strict_types = 1);

namespace App\Domain\Common;

abstract class Event implements EventInterface
{
    public function name(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
