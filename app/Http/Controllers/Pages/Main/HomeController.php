<?php

namespace App\Http\Controllers\Pages\Main;

use App\Http\Controllers\Pages\Main\MainPageController;
use View;

class HomeController extends MainPageController
{
    
    public function index() {
        
        return View::make('main.index');
    }
}
