<?php

namespace App\ACase;

use Illuminate\Database\Eloquent\Model;
use App\User\User;
use App\Shared\Description;

class ACase extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'description_id',
        'name'
    ];
   
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description() {
        return $this->belongsTo(Description::class, 'description_id');
    }
}


