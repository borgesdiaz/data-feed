<?php

namespace App\Http\Controllers\Pages\Main;

use App\Http\Controllers\Pages\Main\MainPageController;
use View;
use Response;
use JWTAuth;
use Hash;
use App\User;

class HomeController extends MainPageController
{
    
    public function index() {
      
        
        /*ob_start();
        var_dump($user);
        $res = ob_get_clean();
        file_put_contents('newfile.txt', $res);*/
        return View::make('main.index');
    }
}
