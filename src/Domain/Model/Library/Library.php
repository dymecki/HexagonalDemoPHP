<?php

declare(strict_types = 1);

namespace App\Domain\Model\Library;

use App\Domain\Common\AggregateRoot;
use App\Domain\Common\Uuid;

final class Library extends AggregateRoot
{
    private $id;
    private $title;
    private $isbn;

    private function __construct(string $id, LibraryName $title, LibraryIsbn $isbn)
    {
        $this->id    = $id;
        $this->title = $title;
        $this->isbn  = $isbn;
    }

    public static function register(string $bookTitle, string $bookIsbn): self
    {
        return new self(
            Uuid::generate(),
            new LibraryName($bookTitle),
            new LibraryIsbn($bookIsbn)
        );
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): LibraryName
    {
        return $this->title;
    }

    public function isbn(): LibraryIsbn
    {
        return $this->isbn;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s %s',
            $this->title(),
            $this->isbn()
        );
    }
}
