<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book\Event;

use App\Domain\Event\Event;

final class BookTitleWasUpdatedEvent extends Event
{
    private $title;

    public function __construct(string $aggregateId, string $title)
    {
        parent::__construct($aggregateId);

        $this->title       = $title;
    }

    public function title(): string
    {
        return $this->title;
    }
}