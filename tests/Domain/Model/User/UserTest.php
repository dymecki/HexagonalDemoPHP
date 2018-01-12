<?php

declare(strict_types=1);

namespace App\Tests\Domain\Model\User;

use App\Domain\Model\User\Email;
use App\Domain\Model\User\User;
use App\Domain\Model\User\UserName;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        $this->user = User::register('Michał', 'michal@dymecki.com');
    }

    public function testUserName()
    {
        $userName = new UserName('Michał');
        $this->assertEquals($this->user->name(), $userName);
    }

    public function testEmail()
    {
        $email = new Email('michal@dymecki.com');
        $this->assertEquals($this->user->email(), $email);
    }
}
