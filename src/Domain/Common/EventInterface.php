<?php

declare(strict_types = 1);

namespace App\Domain\Common;

interface EventInterface
{
    public function appearedAt(): \DateTime;
    public function name(): string;
}