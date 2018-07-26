<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class Mystery extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mysteries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'case_id',
        'description_id',
        'name'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aCase() {
        return $this->belongsTo(ACase::class, 'case_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}
