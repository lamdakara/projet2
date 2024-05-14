<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Entity\User;
class UserEntityTest extends TestCase
{
    
    public function testValidEmail()
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $this->assertSame('test@example.com', $user->getEmail());
        $this->assertStringContainsString('@',$user->getEmail());

        //$violations = $this->validator->validate($user);
        //$this->assertCount(0, $violations, 'L\'adresse e-mail valide doit passer la validation.');
    }

    public function testInvalidEmail()
    {
        $user = new User();
        $user->setEmail('invalid-email');

        $this->assertNotSame('email', $user->getEmail());
    }
}
