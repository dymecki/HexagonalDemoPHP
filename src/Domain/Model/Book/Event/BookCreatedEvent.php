<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Event\Event;

final class BookCreatedEvent extends Event
{
    private $title;
    private $author;
    private $isbn;

    public function __construct(string $aggregateId, string $title, string $author, string $isbn)
    {
        parent::__construct($aggregateId);

        $this->title       = $title;
        $this->author      = $author;
        $this->isbn        = $isbn;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function isbn(): string
    {
        return $this->isbn;
    }
}