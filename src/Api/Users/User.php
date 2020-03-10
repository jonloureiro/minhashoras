<?php

declare(strict_types=1);

namespace App\Api\Users;

use Exception;

class User
{
    protected ?string $username;
    protected string $email;
    protected string $password;

    public function __construct(string $email, string $password, ?string $username = null)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("E-mail inválido", 400);
        }

        if ($password === '') {
            throw new Exception("Senha inválida", 400);
        }

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
