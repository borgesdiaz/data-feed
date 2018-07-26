<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

abstract class ApiController extends Controller
{
    
    const DEFAULT_ORDER_BY         = 'id';
    const DEFAULT_ORDER_DIRECTION  = 'DESC';
    const DEFAULT_OFFSET           = 0;
    const DEFAULT_LIMIT            = 15;
   
}

