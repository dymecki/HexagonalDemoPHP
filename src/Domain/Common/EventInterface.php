<?php

declare(strict_types = 1);

namespace App\Domain\Common;

interface EventInterface
{
    public function name(): string;
}