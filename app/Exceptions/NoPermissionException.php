<?php

namespace App\Exceptions;

use Exception;

class NoPermissionException extends Exception
{
    protected $message = 'No Permission';
}
