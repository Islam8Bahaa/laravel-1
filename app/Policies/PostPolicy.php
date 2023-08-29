<?php

namespace App\Policies;

use App\Models\PostModel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    public function before(User $user , $ability)
    {
        if ($user->user_id == 1) {
            return true ;
        }
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PostModel $post): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(?User $user, PostModel $post): bool
    {
        //
        return $user->id == $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PostModel $post): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PostModel $post): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PostModel $post): bool
    {
        //
    }
}
