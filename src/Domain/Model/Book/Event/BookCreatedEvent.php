<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Event\Event;

final class BookCreatedEvent extends Event
{
    private $bookId;
    private $title;
    private $isbn;
    private $appearedAt;

    public function __construct($bookId, $title, $isbn)
    {
        $this->bookId     = $bookId;
        $this->appearedAt = new \DateTime();
    }

    public function bookId()
    {
        return $this->bookId;
    }

    public function title()
    {
        return $this->title;
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