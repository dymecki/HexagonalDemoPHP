<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Application\Command\User;

use Dymecki\HexagonalDemo\Domain\CommandInterface;

final class RegisterUserCommand implements CommandInterface
{
    private $name;
    private $email;

    public function __construct(string $name, string $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }
}