<?php

namespace App\Shared;

use Illuminate\Database\Eloquent\Model;

class Description extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'descriptions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
