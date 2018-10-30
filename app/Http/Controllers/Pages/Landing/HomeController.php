<?php

namespace App\Http\Controllers\Pages\Landing;

use App\Http\Controllers\Pages\Landing\LandingController;
use View;
use Response;
use JWTAuth;
use Hash;
use App\User;

class HomeController extends LandingController
{
    
    public function index() {

        return View::make('main.landing.home');
    }
}
