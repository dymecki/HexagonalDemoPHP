<?php

declare(strict_types = 1);

namespace App\Domain\Model\Car;

use App\Domain\Common\AggregateRoot;
use App\Domain\Common\Uuid;

final class Book extends AggregateRoot
{
    private $brand;
    private $model;
    private $fuelAmount;

    private function __construct(string $id, BookIsbn $brand, BookTitle $model, FuelAmount $fuelAmount)
    {
        $this->id         = $id;
        $this->brand      = $brand;
        $this->model      = $model;
        $this->fuelAmount = $fuelAmount;
    }

    public static function register(string $carBrand, string $carModel): self
    {
        return new self(
            Uuid::generate(),
            new BookIsbn($carBrand),
            new BookTitle($carModel),
            new FuelAmount(0, 'liter')
        );
    }

    public function brand(): BookIsbn
    {
        return $this->brand;
    }

    public function model(): BookTitle
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
