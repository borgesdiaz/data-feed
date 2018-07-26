<?php

namespace App\Exceptions\User\User;

use Exception;

class CaseNotOwnCaseException extends Exception
{
    protected $message = 'The User does not own the Case';
}

