<?php

declare(strict_types = 1);

namespace Domain\Service;

use App\Domain\Model\Car\Car;
use App\Domain\Model\User\User;
use Money\Money;

final class AuthenticationService implements ServiceInterface
{
    public function authenticate($user, $password)
    {
        return true;
    }
}