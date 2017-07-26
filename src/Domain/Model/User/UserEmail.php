<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\ValueObjectInterface;

final class UserEmail implements ValueObjectInterface
{
    private $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \Exception('Email address is not valid: ' . $email);
        }

        $this->email = $email;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function equals(ValueObjectInterface $valueObject): bool
    {
        // TODO: Implement equals() method.
    }

    public function __toString()
    {
        return $this->email();
    }
}