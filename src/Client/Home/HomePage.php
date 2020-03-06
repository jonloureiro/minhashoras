<?php

declare(strict_types=1);

namespace App\Client\Home;

class HomePage
{
    public function __invoke(): array
    {
        return [
            'templateName' => 'Home',
            'templateData' => [],
        ];
    }
}
