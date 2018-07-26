<?php

namespace App\Repositories\EvidenceType;

use App\Models\ACase\EvidenceType;

class EvidenceTypesRepository
{
    public function create(EvidenceType $type) {
        return $type->save();
    }
    
    public function update(EvidenceType $type) {
        return $type->save();
    }

    public function getById($typeId) {
        return EvidenceType::whereId($typeId)->first();
    }
}

