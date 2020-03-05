<?php

declare(strict_types=1);

namespace App\Client\Login;

class LoginPage
{
    public function __invoke(): array
    {
        return [
            'templateName' => 'Login',
            'templateData' => [
                'name' => 'Jonathan',
            ],
        ];
    }
}
