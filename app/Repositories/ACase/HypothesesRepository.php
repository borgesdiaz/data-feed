<?php

namespace App\Repositories\Hypothesis;

use App\Models\ACase\Hypothesis;

class HypothesesRepository
{
    public function create(Hypothesis $hypothesis) {
        return $hypothesis->save();
    }
    
    public function update(Hypothesis $hypothesis) {
        return $hypothesis->save();
    }

    public function getById($hypothesisId) {
        return Hypothesis::whereId($hypothesisId)->first();
    }
}
