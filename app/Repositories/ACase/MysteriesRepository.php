<?php

namespace App\Repositories\Mystery;

use App\Models\ACase\Mystery;

class MysteriesRepository
{
    public function create(Mystery $mystery) {
        return $mystery->save();
    }
    
    public function update(Mystery $mystery) {
        return $mystery->save();
    }

    public function getById($mysteryId) {
        return Mystery::whereId($mysteryId)->first();
    }
}

