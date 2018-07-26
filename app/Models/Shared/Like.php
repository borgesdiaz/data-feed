<?php

namespace App\Shared;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'likes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'item_id',
        'item_type'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function item() {
        return $this->morphTo();
    }
}
