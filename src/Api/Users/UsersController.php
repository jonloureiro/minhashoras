<?php

declare(strict_types=1);

namespace App\Api\Users;

use Psr\Http\Message\RequestInterface;

class UsersController
{
    public function create(RequestInterface $request)
    {
        return [
            'code' => 501,
            'body' => [
                'message' => 'ainda vou implementar'
            ],
        ];
    }
}
