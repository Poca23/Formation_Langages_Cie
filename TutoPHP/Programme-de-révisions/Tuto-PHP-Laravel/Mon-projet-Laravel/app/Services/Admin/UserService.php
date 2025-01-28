<?php

namespace App\Services\Admin;

use App\Models\User;

class UserService
{
    public function create($data)
    {
        return User::create($data);
    }

    public function delete(User $user)
    {
        $user->delete();
        return true;
    }
}
