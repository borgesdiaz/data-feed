<?php

namespace App\Exceptions\ACase\ACase;

use Exception;

class CaseNotFoundException extends Exception
{
    protected $message = 'The Case is not found';
}
