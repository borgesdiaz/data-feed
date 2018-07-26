<?php

namespace App\Repositories\CasePopularityRanking;

use App\Models\ACase\CasePopularityRanking;

class CasePopulatiryRankingsRepository
{
    public function create(CasePopularityRanking $ranking) {
        return $ranking->save();
    }
    
    public function update(CasePopularityRanking $ranking) {
        return $ranking->save();
    }

    public function getById($rankingId) {
        return CasePopularityRanking::whereId($rankingId)->first();
    }
}
