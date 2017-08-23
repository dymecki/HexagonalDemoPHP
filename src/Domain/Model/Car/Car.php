<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\Common\AggregateRoot;
use Ramsey\Uuid\Uuid;

final class Car extends AggregateRoot
{
    private $brand;
    private $model;
    private $fuelAmount;

    private function __construct(string $id, CarBrand $brand, CarModel $model, FuelAmount $fuelAmount)
    {
        $this->id         = $id;
        $this->brand      = $brand;
        $this->model      = $model;
        $this->fuelAmount = $fuelAmount;
    }

    public static function register(string $carBrand, string $carModel): self
    {
        return new self(
            Uuid::uuid4()->toString(),
            new CarBrand($carBrand),
            new CarModel($carModel),
            new FuelAmount(0, 'liter')
        );
    }

    public function brand(): CarBrand
    {
        return $this->brand;
    }

    public function model(): CarModel
    {
        return $this->model;
    }

    public function fuelAmount(): FuelAmount
    {
        return $this->fuelAmount;
    }

    public function refuel(FuelAmount $fuelAmount): void
    {
        $this->fuelAmount = $fuelAmount;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s %s',
            $this->brand(),
            $this->model()
        );
    }
}
