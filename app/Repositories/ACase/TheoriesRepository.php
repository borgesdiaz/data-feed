<?php

namespace App\Repositories\Theory;

use App\Models\ACase\Theory;

class TheoriesRepository
{
    public function create(Theory $theory) {
        return $theory->save();
    }
    
    public function update(Theory $theory) {
        return $theory->save();
    }

    public function getById($theoryId) {
        return Theory::whereId($theoryId)->first();
    }
}

