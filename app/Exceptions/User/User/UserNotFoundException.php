<?php

namespace App\Exceptions\User\User;

use Exception;

class UserNotFoundException extends Exception
{
    protected $message = 'The User is not found';
}


