<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\ValueObject;

final class CarModel extends ValueObject
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

    public function __toString(): string
    {
        return $this->name();
    }
}
