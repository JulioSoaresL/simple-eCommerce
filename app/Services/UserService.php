<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function listAllUsers()
    {
        return User::paginate(5);
    }

    public function findById(int $id): User
    {
        return User::findOrFail($id);
    }
}
