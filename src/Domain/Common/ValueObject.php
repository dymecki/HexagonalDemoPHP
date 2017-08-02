<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Common;

abstract class ValueObject implements ValueObjectInterface
{
    public function equals(ValueObjectInterface $valueObject): bool
    {
        return $this == $valueObject;
    }
}
