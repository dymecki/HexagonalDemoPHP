<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Common;

interface ValueObjectInterface
{
    public function equals(ValueObjectInterface $valueObject): bool;
}
