<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id'
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
    public function rolea() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}

