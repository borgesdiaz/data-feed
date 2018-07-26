<?php

namespace App\Repositories\Image;

use App\Models\Media\Image;

class ImagesRepository
{
    public function create(Image $image) {
        return $image->save();
    }
    
    public function update(Image $image) {
        return $image->save();
    }

    public function getById($imageId) {
        return Image::whereId($imageId)->first();
    }
}
