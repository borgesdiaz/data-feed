<?php

namespace App\Exceptions;

use Exception;

class NotBelongException extends Exception
{
    protected $message = 'Not Belong';
}
