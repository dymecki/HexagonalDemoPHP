<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

final class CarModel
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
