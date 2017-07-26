<?php

declare(strict_types = 1);

namespace Dymecki\HexagonalDemo\Domain\Model\User;

use Dymecki\HexagonalDemo\Domain\AggregateRootInterface;

final class User implements AggregateRootInterface
{
    private $name;
    private $email;

    public function __construct(UserName $name, UserEmail $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function id()
    {

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
        return (string) $this->name() . ': <' . (string) $this->email() . '>';
    }
}