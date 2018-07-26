<?php

namespace App\Repositories\UserRole;

use App\Models\UserRole\UserRole;

class UserRolesRepositoryRepository
{
    public function create(UserRole $userRole) {
        return $userRole->save();
    }

    public function update(UserRole $userRole) {
        return $userRole->save();
    }

    public function getById($userRoleId) {
        return UserRole::whereId($userRoleId)->first();
    }
}


