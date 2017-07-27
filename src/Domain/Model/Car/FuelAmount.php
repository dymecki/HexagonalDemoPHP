<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\ValueObject;

final class FuelAmount extends ValueObject
{
    private $amount;
    private $unit;

    public function __construct(float $amount, string $unit)
    {
        if ($amount <= 0) {
            throw new \DomainException('Fuel amount must be greater than zero: ' . $amount);
        }

        if ($unit == '') {
            throw new \DomainException('Unit cannot be empty');
        }

        $this->amount = $amount;
        $this->unit   = $unit;
    }

    public function amount(): float
    {
        return $this->amount;
    }

    public function unit(): string
    {
        return $this->unit;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s %s',
            $this->amount(),
            $this->unit()
        );
    }
}
