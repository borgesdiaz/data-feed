<?php

namespace App\Repositories\User;

use App\Models\User\User;

class UsersRepositoryRepository
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


