<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;
use App\Shared\Description;

class Role extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
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

