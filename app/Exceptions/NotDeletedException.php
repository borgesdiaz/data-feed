<?php

namespace App\Exceptions;

use Exception;

class NotDeletedException extends Exception
{
    protected $message = 'Not Deleted';
}

