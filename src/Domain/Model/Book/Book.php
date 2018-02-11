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
    private $title;
    private $author;
    private $isbn;

    private function __construct(string $id, BookTitle $title, BookAuthor $author, BookIsbn $isbn)
    {
        $this->id     = $id;
        $this->title  = $title;
        $this->author = $author;
        $this->isbn   = $isbn;

        DomainEventPublisher::instance()->publish(
            new BookCreatedEvent(
                $this->id(),
                (string) $this->title(),
                (string) $this->author(),
                $this->isbn()
            )
        );
    }

    public static function register(string $title, string $author, string $isbn): self
    {
        return new self(
            Uuid::generate(),
            new BookTitle($title),
            new BookAuthor($author),
            new BookIsbn($isbn)
        );
    }

    public function title(): BookTitle
    {
        return $this->title;
    }

    public function author(): BookAuthor
    {
        return $this->author;
    }

    public function isbn(): BookIsbn
    {
        return $this->isbn;
    }

    public function applyBookCreated(BookCreatedEvent $event): void
    {
        $this->id     = $event->bookId();
        $this->title  = $event->title();
        $this->author = $event->author();
        $this->isbn   = $event->isbn();
    }

    public function applyBookTitleWasUpdated(BookTitleWasUpdatedEvent $event): void
    {
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
