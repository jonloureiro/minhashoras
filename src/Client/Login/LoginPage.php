<?php

declare(strict_types=1);

namespace App\Client\Login;

use League\Plates\Engine;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

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
