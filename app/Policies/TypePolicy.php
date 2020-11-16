<?php

namespace App\Policies;

use App\Policies\Type;
use Illuminate\Auth\Access\HandlesAuthorization;

class TypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the type can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the type can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Type  $model
     * @return mixed
     */
    public function view(User $user, Type $model)
    {
        return true;
    }

    /**
     * Determine whether the type can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the type can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Type  $model
     * @return mixed
     */
    public function update(User $user, Type $model)
    {
        return true;
    }

    /**
     * Determine whether the type can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Type  $model
     * @return mixed
     */
    public function delete(User $user, Type $model)
    {
        return true;
    }

    /**
     * Determine whether the type can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Type  $model
     * @return mixed
     */
    public function restore(User $user, Type $model)
    {
        return true;
    }

    /**
     * Determine whether the type can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Type  $model
     * @return mixed
     */
    public function forceDelete(User $user, Type $model)
    {
        return true;
    }
}
