<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

use Ramsey\Uuid\Uuid as RamseyUuid;

abstract class Uuid implements UuidInterface
{
    public static function generate(): UuidInterface
    {
        return new static(RamseyUuid::uuid4());
    }

    public static function fromString($string): UuidInterface
    {
        return new static(RamseyUuid::fromString($string));
    }

    public function equals(UuidInterface $other)
    {
        return $this == $other;
    }

    public function toString(): string
    {
        return $this->id->toString();
    }

    public function __toString()
    {
        return $this->id->toString();
    }
}
