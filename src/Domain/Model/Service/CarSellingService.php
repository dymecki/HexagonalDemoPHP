<?php

declare(strict_types = 1);

namespace Domain\Model\Service;

use Dymecki\HexagonalDemo\Domain\Model\Car\Car;
use Dymecki\HexagonalDemo\Domain\Model\User\User;

final class CarSellingService implements ServiceInterface
{
    public function sell(User $seller, User $buyer, Car $car, $amount): bool
    {
        if ($seller->id() == $buyer->id()) {
            throw new \Exception('Seller and buyer cannot be the same person.');
        }

        return true;
    }
}