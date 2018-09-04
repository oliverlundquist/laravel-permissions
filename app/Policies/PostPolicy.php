<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function read(User $user)
    {
        // get permissions from database here
        // like example below
        // if ($user->permissions->contains('read-posts')) {
        //     return true;
        // }
        // return false;

        // just randomly authorize the user as a test
        return rand(0, 1) === 1;
    }
}
