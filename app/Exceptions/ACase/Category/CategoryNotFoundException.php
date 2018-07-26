<?php

namespace App\Exceptions\ACase\Category;

use Exception;

class CategoryNotFoundException extends Exception
{
    protected $message = 'The Category is not found';
}

