<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class EvidenceType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evidence_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description_id',
        'name',
        'weight'
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}
