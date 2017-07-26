<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain;

interface UuidInterface
{
    public static function generate(): self;

    public static function fromString($string): self;

    public function equals(UuidInterface $other);

    public function toString(): string;
}
