<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface ValueObjectInterface
{
    public function equals(ValueObjectInterface $valueObject): bool;
}
