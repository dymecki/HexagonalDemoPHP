<?php

include_once 'InitLogger.php';

use App\Domain\Model\User\User;
use App\Infrastructure\Persistence\InMemory\UserInMemoryRepository;
use App\Application\Command\SimpleCommandBus;
use App\Application\Command\User\RegisterUserCommand;
use App\Application\Command\Book\RegisterBookCommand;

//$user = User::register(
//    'John',
//    'john@foo.com'
//);
//
//$userRepository      = new UserInMemoryRepository;
//$registerUserCommand = new RegisterUserCommand('Adam', 'adam@smith.com');
$commandBus          = new SimpleCommandBus;
//
//var_dump(
//    $commandBus->execute($registerUserCommand)
//);

$registerBookCommand = new RegisterBookCommand('Europe', 'Norman Davies', '978-83-240-1424-8');

$commandBus->execute($registerBookCommand);

//$bookTitleWasUpdated = new \App\Domain\Model\Book\Event\BookTitleWasUpdatedEvent(1, 'Nowy tytuł książki');
//
//$eventStore = new \App\Infrastructure\Persistence\EventStore\PdoEventStore();
//$eventStore->add($bookTitleWasUpdated);