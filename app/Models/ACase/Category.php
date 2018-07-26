<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class Category extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'case_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description_id',
        'name'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}


