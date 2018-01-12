<?php

declare(strict_types = 1);

namespace App\Domain\Model\User;

use App\Domain\Common\ValueObject;
use App\Domain\Model\User\Exception\EmailNotValidException;

final class Email extends ValueObject
{
    private $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new EmailNotValidException($email);
        }

        $this->email = $email;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function __toString()
    {
        return $this->email();
    }
}