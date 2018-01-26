<?php

declare(strict_types = 1);

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Model\Car\Car;
use App\Domain\Model\Car\CarId;
use App\Domain\Model\Car\CarRepositoryInterface;

final class CarInMemoryRepository implements CarRepositoryInterface
{
    private $repository = [];

    public function add(Car $car)
    {
        $this->repository[(string) $car->id()] = $car;
    }

    public function findById(CarId $carId): Car
    {
        if (isset($this->repository[(string) $carId])) {
            return $this->repository[(string) $carId];
        }

        throw new \Exception('No car in the repository for CarId: ' . $carId);
    }

    public function remove(Car $car): void
    {
        unset($this->repository[(string) $car->id()]);
    }
}
