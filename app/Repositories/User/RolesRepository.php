<?php

namespace App\Repositories\Role;

use App\Models\User\Role;

class RolesRepositoryRepository
{
    public function create(Role $role) {
        return $role->save();
    }

    public function update(Role $role) {
        return $role->save();
    }

    public function getById($roleId) {
        return Role::whereId($roleId)->first();
    }
}


