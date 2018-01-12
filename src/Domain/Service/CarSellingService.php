<?php

declare(strict_types = 1);

namespace Domain\Service;

use App\Domain\Model\Car\Car;
use App\Domain\Model\User\User;
use Money\Money;

final class CarSellingService implements ServiceInterface
{
    public function sell(User $seller, User $buyer, Car $car, Money $money): bool
    {
        if ($seller->id() == $buyer->id()) {
            throw new \Exception('Seller and buyer cannot be the same person.');
        }

        return true;
    }
}