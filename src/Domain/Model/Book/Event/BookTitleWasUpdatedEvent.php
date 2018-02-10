<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Event\Event;

final class BookTitleWasUpdatedEvent extends Event
{
    private $bookId;
    private $title;
    private $appearedAt;

    public function __construct($bookId, string $title)
    {
        $this->bookId     = $bookId;
        $this->title      = $title;
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

    public function appearedAt(): \DateTime
    {
        return $this->appearedAt;
    }
}