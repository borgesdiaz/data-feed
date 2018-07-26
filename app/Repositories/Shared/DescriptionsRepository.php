<?php

namespace App\Repositories\Shared;

use App\Models\Shared\Description;

class DescriptionsRepository
{
    public function create(Description $description) {
        return $description->save();
    }
    
    public function update(Description $description) {
        return $description->save();
    }

    public function getById($descriptionId) {
        return Description::whereId($descriptionId)->first();
    }
}


