<?php

declare(strict_types = 1);

namespace App\Application\Command\Book;

use App\Application\Command\CommandHandlerInterface;
use App\Domain\Event\DomainEventPublisher;
use App\Domain\Model\Book\Book;
use App\Domain\Model\Book\Event\BookCreatedEvent;
use App\Infrastructure\Persistence\InMemory\BookInMemoryRepository;
use App\Infrastructure\Persistence\EventStore\PdoEventStore;

final class CreateBookCommandHandler implements CommandHandlerInterface
{
    public function handle(CreateBookCommand $command)
    {
        $book = Book::register(
            $command->title(),
            $command->author(),
            $command->isbn()
        );

        (new BookInMemoryRepository())->add($book);

        $event = new BookCreatedEvent(
            $book->id(),
            (string) $book->title(),
            $book->author(),
            $book->isbn()
        );

        DomainEventPublisher::instance()->publish($event);

        (new PdoEventStore())->add($event);
    }
}