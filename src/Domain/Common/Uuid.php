<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Common;

use Ramsey\Uuid\Uuid as RamseyUuid;
use Ramsey\Uuid\UuidInterface;

final class Uuid extends ValueObject
{
    private $id;

    public function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }

    public function id(): UuidInterface
    {
        return $this->id;
    }

    public static function fromString(string $userId): self
    {
        return new self(RamseyUuid::fromString($userId));
    }

    public function __toString(): string
    {
        return $this->id()->toString();
    }
}