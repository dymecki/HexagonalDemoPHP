<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\AggregateRootInterface;
use Ramsey\Uuid\Uuid;

final class Car implements AggregateRootInterface
{
    private $id;
    private $brand;
    private $model;
    private $fuelAmount;

    private function __construct(CarId $id, CarBrand $brand, CarModel $model, FuelAmount $fuelAmount)
    {
        $this->id         = $id;
        $this->brand      = $brand;
        $this->model      = $model;
        $this->fuelAmount = $fuelAmount;
    }

    public static function register(string $carBrand, string $carModel, float $fuelAmount, string $fuelUnit): self
    {
        return new self(
            new CarId(Uuid::uuid4()),
            new CarBrand($carBrand),
            new CarModel($carModel),
            new FuelAmount($fuelAmount, $fuelUnit)
        );
    }

    public function id(): CarId
    {
        return $this->id();
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

    public function record($event)
    {
        // TODO: Implement record() method.
    }

    public function release()
    {
        // TODO: Implement release() method.
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
