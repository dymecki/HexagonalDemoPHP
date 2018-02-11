<?php

declare(strict_types = 1);

namespace App\Application\Command\Book;

use App\Application\Command\CommandHandlerInterface;
use App\Domain\Event\DomainEventPublisher;
use App\Domain\Model\Book\Book;
use App\Domain\Model\Book\Event\BookCreatedEvent;
use App\Infrastructure\Persistence\InMemory\BookInMemoryRepository;

final class RegisterBookCommandHandler implements CommandHandlerInterface
{
    public function handle(RegisterBookCommand $command)
    {
        $book = Book::register(
            $command->title(),
            $command->author(),
            $command->isbn()
        );

        (new BookInMemoryRepository())->add($book);

        DomainEventPublisher::instance()->publish(
            new BookCreatedEvent(
                $book->id(),
                (string) $book->title(),
                $book->author(),
                $book->isbn()
            )
        );
    }
}