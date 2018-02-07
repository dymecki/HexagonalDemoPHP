<?php

declare(strict_types = 1);

namespace App\Domain\Model\Library;

use App\Domain\Common\ValueObject;
use App\Domain\Common\ValueObjectInterface;

final class LibraryName extends ValueObject
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

    public function equals(ValueObjectInterface $valueObject): bool
    {
        return $this->value() === $valueObject->value();
    }

    public function __toString(): string
    {
        return $this->value();
    }
}
