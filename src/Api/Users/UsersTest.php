<?php

declare(strict_types=1);

namespace App\Api\Users;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertTrue;

class UsersTest extends TestCase
{
    public function testCriptografarSenhaApósInstanciarAClasseUser()
    {
        $user = new User('me@jonloureiro.dev', '123456');
        assertNotEquals('123456', $user->getPassword());
    }

    public function testVerificarIgualdadeEntreSenhas()
    {
        $user = new User('me@jonloureiro.dev', '147258');
        assertTrue($user->checkPassword('147258'));
    }
}
