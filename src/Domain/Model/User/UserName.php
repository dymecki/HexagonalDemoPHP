<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\ValueObjectInterface;

final class UserName implements ValueObjectInterface
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function equals(ValueObjectInterface $valueObject): bool
    {
        // TODO: Implement equals() method.
    }

    public function __toString()
    {
        return $this->name();
    }
}