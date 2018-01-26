<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book;

use App\Domain\Common\ValueObject;

final class BookIsbn extends ValueObject
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

    public function __toString(): string
    {
        return $this->value();
    }
}
