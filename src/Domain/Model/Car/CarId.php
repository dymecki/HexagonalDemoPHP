<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\Car;

use Dymecki\HexagonalDemo\Domain\ValueObject;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class CarId extends ValueObject
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

    public static function fromString(string $carId): self
    {
        return new self(Uuid::fromString($carId));
    }

    public function __toString(): string
    {
        return $this->id()->toString();
    }
}