<?php

namespace App\Exceptions\User;

use App\Exceptions\NotCreatedException;

class UserNotCreatedException extends NotCreatedException
{
    protected $message = 'User Not Created';
}


