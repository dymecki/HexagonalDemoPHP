<?php

declare(strict_types=1);

namespace Dymecki\HexagonalDemo\Domain\Model\User\Listener;

use Dymecki\HexagonalDemo\Domain\Common\EventInterface;
use Dymecki\HexagonalDemo\Domain\Common\EventListenerInterface;

final class SendWelcomeEmailListener implements EventListenerInterface
{
    public function handle(EventInterface $event)
    {
        var_dump('Send an e-mail');
    }
}
