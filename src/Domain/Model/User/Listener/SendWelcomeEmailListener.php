<?php

declare(strict_types = 1);

namespace App\Domain\Model\User\Listener;

use App\Domain\Event\EventInterface;
use App\Domain\Event\EventListenerInterface;

final class SendWelcomeEmailListener implements EventListenerInterface
{
    public function handle(EventInterface $event)
    {
        var_dump('Send an e-mail');
    }
}
