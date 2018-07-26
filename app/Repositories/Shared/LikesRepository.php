<?php

namespace App\Repositories\Shared;

use App\Models\Shared\Like;

class LikesRepository
{
    public function create(Like $like) {
        return $like->save();
    }
    
    public function update(Like $like) {
        return $like->save();
    }

    public function getById($likeId) {
        return Like::whereId($likeId)->first();
    }
}


