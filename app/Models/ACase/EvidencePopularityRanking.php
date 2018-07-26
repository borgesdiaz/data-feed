<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;

class EvidencePopularityRanking extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evidence_popularity_rankings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'evidence_id',
        'general_ranking',
        'cosigns',
        'likes',
        'comments'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evidence() {
        return $this->belongsTo(Evidence::class, 'evidence_id');
    }
}
