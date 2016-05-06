<?php

namespace App\Exceptions\User;

use App\Exceptions\NotUpdatedException;

class UserNotUpdatedException extends NotUpdatedException
{
    protected $message = 'User Not Updated';
}