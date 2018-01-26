<?php

declare(strict_types = 1);

namespace App\Domain\Model\Car;

interface CarRepositoryInterface
{
    public function add(Book $car);

    public function findById(CarId $carId): Book;

    public function remove(Book $car);
}