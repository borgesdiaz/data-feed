<?php

namespace App\Repositories\EvidencePopularityRanking;

use App\Models\ACase\EvidencePopularityRanking;

class EvidencePopularityRankingsRepository
{
    public function create(EvidencePopularityRanking $ranking) {
        return $ranking->save();
    }
    
    public function update(EvidencePopularityRanking $ranking) {
        return $ranking->save();
    }

    public function getById($rankingId) {
        return EvidencePopularityRanking::whereId($rankingId)->first();
    }
}
