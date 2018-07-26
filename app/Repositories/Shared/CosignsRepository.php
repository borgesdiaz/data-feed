<?php

namespace App\Repositories\Shared;

use App\Models\Shared\Cosign;

class CosignsRepository
{
    public function create(Cosign $cosign) {
        return $cosign->save();
    }
    
    public function update(Cosign $cosign) {
        return $cosign->save();
    }

    public function getById($cosignId) {
        return Cosign::whereId($cosignId)->first();
    }
}


