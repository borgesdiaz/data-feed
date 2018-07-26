<?php

namespace App\Media;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class Image extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description_id',
        'name',
        'path',
        'thumbnail_path',
        'size',
        'mime_type',
        'extension'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}

