<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Event\Event;

final class BookCreatedEvent extends Event
{
    private $bookId;
    private $title;
    private $author;
    private $isbn;
    private $appearedAt;

    public function __construct($bookId, string $title, string $author, string $isbn)
    {
        $this->bookId     = $bookId;
        $this->title      = $title;
        $this->author     = $author;
        $this->isbn       = $isbn;
        $this->appearedAt = new \DateTime();
    }

    public function bookId()
    {
        return $this->bookId;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function isbn()
    {
        return $this->isbn;
    }

    public function appearedAt(): \DateTime
    {
        return $this->appearedAt;
    }
}