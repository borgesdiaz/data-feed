<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;

class CasePopularityRanking extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'case_popularity_rankings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'case_id',
        'general_ranking',
        'cosigns',
        'likes',
        'comments'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aCase() {
        return $this->belongsTo(ACase::class, 'case_id');
    }
}


