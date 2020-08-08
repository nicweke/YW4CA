<?php

namespace App\Policies;

use App\User;
use App\Volunteer;
use Illuminate\Auth\Access\HandlesAuthorization;

class VolunteerPolicy
{
    use HandlesAuthorization;

    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }


    public function read(User $user, Volunteer $volunteer)
    {
        return $user->id == $volunteer->user_id;
    }

    /**
     * Determine whether the user can update the volunteer.
     *
     * @param  \App\User  $user
     * @param  \App\volunteer  $volunteer
     * @return mixed
     */
    public function edit(User $user, Volunteer $volunteer)
    {

        return $user->id == $volunteer->user_id;
    }


    /**
     * Determine whether the user can create volunteers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the volunteer.
     *
     * @param  \App\User  $user
     * @param  \App\Volunteer  $volunteer
     * @return mixed
     */
    public function delete(User $user, Volunteer $volunteer)
    {
        return $user->id == $volunteer->user_id;
    }

}
