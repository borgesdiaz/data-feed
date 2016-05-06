<?php

namespace App\Exceptions\User;

use App\Exceptions\NotDeletedException;

class UserNotDeletedException extends NotDeletedException
{
    protected $message = 'User Not Deleted';
}

