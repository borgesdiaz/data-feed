<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;

class Theory extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'theories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hypothesis_id',
        'name'
    ];
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hypothesis() {
        return $this->belongsTo(Hypothesis::class, 'hypothesis_id');
    }
}
