<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\AggregateRootInterface;
use Ramsey\Uuid\UuidInterface;

final class User implements AggregateRootInterface
{
    private $id;
    private $name;
    private $email;

    private function __construct(UserId $id, UserName $name, UserEmail $email)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->email = $email;
    }

    public static function register(UuidInterface $id, string $name, string $email): self
    {
        return new self(
            new UserId($id),
            new UserName($name),
            new UserEmail($email)
        );
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function name(): UserName
    {
        return $this->name;
    }

    public function email(): UserEmail
    {
        return $this->email;
    }

    public function release()
    {
        // TODO: Implement release() method.
    }

    public function record($event)
    {
        // TODO: Implement record() method.
    }

    public function __toString(): string
    {
        return sprintf(
            '%s <%s>',
            $this->name(),
            $this->email()
        );
    }
}