<?php

declare(strict_types = 1);

namespace App\Domain\Model\Library;

use App\Domain\Common\AggregateRoot;
use App\Domain\Common\Uuid;

final class Library extends AggregateRoot
{
    private $id;
    private $name;

    private function __construct(string $id, LibraryName $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public static function register(string $name): self
    {
        return new self(
            Uuid::generate(),
            new LibraryName($name)
        );
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): LibraryName
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s %s',
            $this->name()
        );
    }
}
