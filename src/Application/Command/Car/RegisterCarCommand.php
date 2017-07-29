<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command\User;

use Dymecki\HexagonalDemo\Domain\Common\CommandInterface;

final class RegisterCarCommand implements CommandInterface
{
    private $brand;
    private $model;
    private $fuelAmount;
    private $fuelUnit;

    public function __construct(string $brand, string $model, float $fuelAmount, string $fuelUnit)
    {
        $this->brand      = $brand;
        $this->model      = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelUnit   = $fuelUnit;
    }

    public function brand(): string
    {
        return $this->brand;
    }

    public function model(): string
    {
        return $this->model;
    }

    public function fuelAmount(): float
    {
        return $this->fuelAmount;
    }

    public function fuelUnit(): string
    {
        return $this->fuelUnit;
    }
}