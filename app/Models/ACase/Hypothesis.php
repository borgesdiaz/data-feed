<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class Hypothesis extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hypotheses';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mystery_id',
        'description_id',
        'name'
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mystery() {
        return $this->belongsTo(Mystery::class, 'mystery_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}

