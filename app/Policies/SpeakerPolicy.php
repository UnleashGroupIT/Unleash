<?php

namespace App\Policies;

use App\User;
use App\Speakers;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpeakerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the speakers.
     *
     * @param  \App\User  $user
     * @param  \App\Speakers  $speakers
     * @return mixed
     */
    public function view(User $user, Speakers $speakers)
    {
        //
    }

    /**
     * Determine whether the user can create speakers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the speakers.
     *
     * @param  \App\User  $user
     * @param  \App\Speakers  $speakers
     * @return mixed
     */
    public function update(User $user, Speakers $speakers)
    {
        //
    }

    /**
     * Determine whether the user can delete the speakers.
     *
     * @param  \App\User  $user
     * @param  \App\Speakers  $speakers
     * @return mixed
     */
    public function delete(User $user, Speakers $speakers)
    {
        //
    }
}
