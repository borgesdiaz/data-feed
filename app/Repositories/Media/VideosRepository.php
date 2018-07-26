<?php

namespace App\Repositories\Video;

use App\Models\Media\Video;

class VideosRepository
{
    public function create(Video $video) {
        return $video->save();
    }
    
    public function update(Video $video) {
        return $video->save();
    }

    public function getById($videoId) {
        return Video::whereId($videoId)->first();
    }
}
