<?php

namespace App\Repositories\Audio;

use App\Models\Media\Audio;

class AudiosRepository
{
    public function create(Audio $audio) {
        return $audio->save();
    }
    
    public function update(Audio $audio) {
        return $audio->save();
    }

    public function getById($audioId) {
        return Audio::whereId($audioId)->first();
    }
}
