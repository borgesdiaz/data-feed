<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;

class HypothesisPopularityRanking extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hypothesis_popularity_rankings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hypothesis_id',
        'general_ranking',
        'cosigns',
        'evidence_cosigns',
        'likes',
        'evidence_likes',
        'comments',
        'evidence_comments'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hypothesis() {
        return $this->belongsTo(Hypothesis::class, 'hypothesis_id');
    }
}
