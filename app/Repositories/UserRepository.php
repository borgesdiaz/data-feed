<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    public function create(User $user) {
        return $user->save();
    }

    public function update(User $user) {
        return $user->save();
    }

    public function getById($user_id) {
        return User::whereId($user_id)->first();
    }
}


