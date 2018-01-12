<?php

declare(strict_types = 1);

namespace App\Domain\Common;

interface ValueObjectInterface
{
    public function equals(ValueObjectInterface $valueObject): bool;
}
