<?php

declare(strict_types=1);

namespace App\Api\Users;

class User
{
    protected ?string $username;
    protected string $email;
    protected string $password;

    public function __construct(string $email, string $password, ?string $username = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function checkPassword(string $password): bool
    {
        return password_verify($password, $this->password);
    }
}
