<?php

declare(strict_types = 1);

namespace Domain\Service;

use App\Domain\Model\User\User;

final class AuthenticationService implements ServiceInterface
{
    public function authenticate(User $user, $password)
    {
        return true;
    }
}