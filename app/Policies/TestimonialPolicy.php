<?php

namespace App\Policies;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Testimonial $testimonial)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
<<<<<<< HEAD
        return in_array($user->role_id,[1,2,3,4]);
=======
        
        return $user->roles->where('role', '')->count() > -1;
>>>>>>> 3e0dab0d91f84ac19272650f054cd641bde32c0e
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->role_id === 1 || $user->role_id === 2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return $user->role_id === 1;
    }
    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Testimonial $testimonial)
    {
        //
    }
}

