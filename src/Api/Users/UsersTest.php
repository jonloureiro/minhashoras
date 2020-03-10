<?php

declare(strict_types=1);

namespace App\Api\Users;

use Exception;
use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{
    public function testCriptografarSenhaApósInstanciarAClasseUser()
    {
        $user = new User('me@jonloureiro.dev', '123456');
        $this->assertNotEquals('123456', $user->getPassword());
    }

    public function testVerificarIgualdadeEntreSenhas()
    {
        $user = new User('me@jonloureiro.dev', '147258');
        $this->assertTrue($user->checkPassword('147258'));
    }

    public function testLançarException400QuandoEmailForInválido()
    {
        try {
            new User('jonloureiro.dev', '123456');
        } catch (Exception $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }

    public function testLançarException400QuandoSenhaForStringVazia()
    {
        try {
            new User('me@jonloureiro.dev', '');
        } catch (Exception $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }
}
