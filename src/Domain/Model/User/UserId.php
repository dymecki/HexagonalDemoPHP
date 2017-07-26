<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\ValueObject;
use Ramsey\Uuid\Uuid;

final class UserId extends ValueObject
{
    private $id;

    public function __construct(Uuid $id)
    {
        $this->id = $id;
    }

    public function id(): Uuid
    {
        return $this->id;
    }

    public static function fromString(string $userId): self
    {
        return new self(Uuid::fromString($userId));
    }

    public function __toString(): string
    {
        return $this->id()->toString();
    }
}