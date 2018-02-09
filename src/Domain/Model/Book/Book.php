<?php

declare(strict_types = 1);

namespace App\Domain\Model\Book;

use App\Domain\Common\AggregateRoot;
use App\Domain\Common\Uuid;
use App\Domain\Event\DomainEventPublisher;
use App\Domain\Model\Book\Event\BookCreatedEvent;
use App\Domain\Model\Book\Event\BookTitleWasUpdatedEvent;

final class Book extends AggregateRoot
{
    private $id;
    private $title;
    private $isbn;

    private function __construct(string $id, BookTitle $title, BookIsbn $isbn)
    {
        $this->id    = $id;
        $this->title = $title;
        $this->isbn  = $isbn;

        DomainEventPublisher::instance()->publish(
            new BookCreatedEvent(
                $this->id(),
                $this->title(),
                $this->isbn()
            )
        );
    }

    public static function register(string $bookTitle, string $bookIsbn): self
    {
        return new self(
            Uuid::generate(),
            new BookTitle($bookTitle),
            new BookIsbn($bookIsbn)
        );
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): BookTitle
    {
        return $this->title;
    }

    public function isbn(): BookIsbn
    {
        return $this->isbn;
    }

    public function applyBookCreated(BookCreatedEvent $event): void
    {
        $this->id    = $event->bookId();
        $this->title = $event->title();
        $this->isbn  = $event->isbn();
    }

    public function applyBookTitleWasUpdated(BookTitleWasUpdatedEvent $event): void
    {
        $this->id    = $event->bookId();
        $this->title = $event->title();
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
