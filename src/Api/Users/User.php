<?php

declare(strict_types=1);

namespace App\Api\Users;

class User{
    protected ?string $username;
    protected string $email;
    protected string $password;

    public function __construct()
    {

    }
}
