<?php

namespace App\Repositories\HypothesisPopularityRanking;

use App\Models\ACase\HypothesisPopularityRanking;

class HypothesisPopularityRankingsRepository
{
    public function create(HypothesisPopularityRanking $ranking) {
        return $ranking->save();
    }
    
    public function update(HypothesisPopularityRanking $ranking) {
        return $ranking->save();
    }

    public function getById($rankingId) {
        return HypothesisPopularityRanking::whereId($rankingId)->first();
    }
}
