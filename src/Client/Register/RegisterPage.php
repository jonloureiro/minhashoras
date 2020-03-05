<?php

declare(strict_types=1);

namespace App\Client\Register;

class RegisterPage
{
    public function __invoke(): array
    {
        return [
            'templateName' => 'Register',
            'templateData' => [],
        ];
    }
}
