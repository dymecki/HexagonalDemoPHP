<?php

declare(strict_types = 1);

namespace App\Domain\Model\Car;

interface CarRepositoryInterface
{
    public function save(Car $car);

    public function findById(CarId $carId): Car;

    public function remove(Car $car);
}