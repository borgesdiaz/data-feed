<?php

namespace App\Repositories\Evidence;

use App\Models\ACase\Evidence;

class EvidenceRepository
{
    public function create(Evidence $evidence) {
        return $evidence->save();
    }
    
    public function update(Evidence $evidence) {
        return $evidence->save();
    }

    public function getById($evidenceId) {
        return Evidence::whereId($evidenceId)->first();
    }
}

