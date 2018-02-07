<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Common\Event;

final class BookCreatedEvent extends Event
{
    private $bookId;
    private $appearedAt;

    public function __construct($bookId)
    {
        $this->bookId     = $bookId;
        $this->appearedAt = new \DateTime();
    }

    public function bookId()
    {
        return $this->bookId;
    }

    public function appearedAt(): \DateTime
    {
        return $this->appearedAt;
    }
}