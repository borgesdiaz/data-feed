<?php

namespace App\Exceptions\User;

use App\Exceptions\NotFoundException;

class UserNotFoundException extends NotFoundException
{
    protected $message = 'User Not Found';
}

