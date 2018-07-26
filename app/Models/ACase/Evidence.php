<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;
use App\Media\Image;
use App\Media\Video;
use App\Media\Audio;

class ACase extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id',
        'description_id',
        'image_id',
        'video_id',
        'audio_id',
        'name',
        'reference',
        'link'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo(EvidenceType::class, 'type_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image() {
        return $this->belongsTo(Image::class, 'image_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video() {
        return $this->belongsTo(Video::class, 'video_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function audio() {
        return $this->belongsTo(Audio::class, 'audio_id');
    }
}

