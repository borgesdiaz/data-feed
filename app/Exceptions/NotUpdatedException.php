<?php

namespace App\Exceptions;

use Exception;

class NotUpdatedException extends Exception
{
    protected $message = 'Not Updated';
}
