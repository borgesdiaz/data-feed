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
    
    public function search($parameters) {
        $orderBy = $parameters['order_by'];
        $orderDirection = $parameters['order_direction'];
        $offset = $parameters['offset'];
        $limit = $parameters['limit'];
        
        return ACase::orderBy($orderBy, $orderDirection)
                    ->skip($offset)
                    ->take($limit)
                    ->get();
    }
}