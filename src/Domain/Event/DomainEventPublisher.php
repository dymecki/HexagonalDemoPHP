<?php

declare(strict_types = 1);

namespace App\Domain\Event;

final class DomainEventPublisher
{
    private        $subscribers;
    private static $instance;

    private function __construct()
    {
        $this->subscribers = [];
    }

    public static function instance(): self
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function subscribe(EventSubscriberInterface $eventSubscriber)
    {
        $this->subscribers = $eventSubscriber;
    }

    public function publish(EventInterface $event)
    {
        foreach ($this->subscribers as $subscriber) {
            if ($subscriber->isSubscribedTo($event)) {
                $subscriber->handle($event);
            }
        }
    }
}