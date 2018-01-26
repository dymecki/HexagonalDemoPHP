<?php

declare(strict_types = 1);

namespace App\Domain\Model\User;

use App\Domain\Common\ValueObject;

final class UserName extends ValueObject
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}