<?php

namespace App\Repositories\ACase;

use App\Models\ACase\ACase;

class CasesRepository
{
    public function create(ACase $case) {
        return $case->save();
    }
    
    public function update(ACase $case) {
        return $case->save();
    }

    public function getById($caseId) {
        return ACase::whereId($caseId)->first();
    }
}