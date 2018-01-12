<?php

declare(strict_types=1);

namespace App\Tests\Domain\Model\User;

use App\Domain\Model\User\Email;
use App\Domain\Model\User\Exception\EmailNotValidException;
use App\Domain\Model\User\UserName;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    private $obj;

    public function setUp(): void
    {
        $this->obj = new UserName('Michał');
    }

    public function testAssertProperEmail()
    {
        $email = new Email('michal@dymecki.com');
        $this->assertEquals($email->email(), 'michal@dymecki.com');
    }

    public function testEmailToString()
    {
        $email = new Email('michal@dymecki.com');
        $this->assertEquals((string) $email, 'michal@dymecki.com');
    }

    public function testInvalidEmailException()
    {
        $this->expectException(EmailNotValidException::class);
        $email = new Email('michaldymecki.com');
    }
}
